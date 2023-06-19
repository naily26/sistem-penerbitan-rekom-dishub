<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\perusahaan;
use App\Models\pengajuan_perusahaan;
use App\Models\pengajuan_angkutan;
use Carbon\Carbon;
use App\Exports\PengajuanPerusahaanExport;
use App\Exports\PengajuanAngkutanExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifPerusahaan;

class DataPenerbitanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function indexPerusahaan() {
        $from = null;
        $to = null;
        $today = Carbon::today()->toDateString();
        if (Auth::user()->role == 'admin') {
            $data = pengajuan_perusahaan::where('status_penerbitan', 'diambil')->get();
            return view('admin.data-penerbitan.perusahaan', compact('data', 'from', 'to'));
        } elseif (Auth::user()->role == 'customer-service') {
            $disetujui = pengajuan_perusahaan::where('status_pengecekan', 'disetujui')->get();
            return view('customer-service.data-penerbitan.perusahaan', compact('disetujui', 'today'));
        }
       
    }

    public function indexAngkutan() {
        $today = Carbon::today()->toDateString();
        $from = null;
        $to = null;
        if (Auth::user()->role == 'admin') {
            $data = pengajuan_angkutan::where('status_penerbitan', 'diambil')->get();
            return view('admin.data-penerbitan.angkutan', compact('data', 'from', 'to'));
        } elseif (Auth::user()->role == 'customer-service') {
            $disetujui = pengajuan_angkutan::where('status_pengecekan', 'disetujui')->get();
            return view('customer-service.data-penerbitan.angkutan', compact('disetujui', 'today'));
        }
    }

    public function filterDataPerusahaan(Request $request) {
        $from = date($request->start);
        $to = date($request->end);
        //dd($request->end);

        $data = pengajuan_perusahaan::whereBetween('tanggal_pengambilan', [$from, $to])->get();
        return view('admin.data-penerbitan.perusahaan', compact('data', 'from', 'to'));
    }

    public function filterDataAngkutan(Request $request) {
        $from = date($request->start);
        $to = date($request->end);
        //dd($request->end);

        $data = pengajuan_angkutan::whereBetween('tanggal_pengambilan', [$from, $to])->get();
        return view('admin.data-penerbitan.angkutan', compact('data', 'from', 'to'));
    }

    public function exportPerusahaan(Request $request)
    {
        $from = date($request->from);
        $to = date($request->to);
        $today = Carbon::today();
        if ($request->from == null) {
            $data = pengajuan_perusahaan::where('status_penerbitan', 'diambil')->get();
        } else {
            $data = pengajuan_perusahaan::where('status_penerbitan', 'diambil')->whereBetween('tanggal_pengambilan', [$from, $to])->get();
        }
        
        return Excel::download(new PengajuanPerusahaanExport($data),'Export_Perusahaan'.$today.'.xlsx');
    }

    public function exportAngkutan(Request $request)
    {
        $from = date($request->from);
        $to = date($request->to);
        $today = Carbon::today();
        if ($request->from == null) {
            $data = pengajuan_angkutan::where('status_penerbitan', 'diambil')->get();
        } else {
            $data = pengajuan_angkutan::where('status_penerbitan', 'diambil')->whereBetween('tanggal_pengambilan', [$from, $to])->get();
        }
        
        return Excel::download(new PengajuanAngkutanExport($data),'Export_Angkutan'.$today.'.xlsx');
    }

    public function SendMail($id) {
        $data = Perusahaan::where('id', $id)->first();
        $mail = $data->user->email;
        //dd($mail);
        $send =  Mail::to($mail)->send(new NotifMail($data));
        if($send) {
            return redirect()->back()->with(['success'=>'Nontifikasi berhasil dikirim']);
        } else {
            return redirect()->back()->with(['gagal'=>'Nontifikasi gagal dikirm']);
        }
    }
}
