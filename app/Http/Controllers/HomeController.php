<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antrian;
use App\Models\perusahaan;
use App\Models\pengajuan_perusahaan;
use App\Models\petugas;
use App\Models\angkutan;
use App\Models\pengajuan_angkutan;
use Auth;

use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            return view('admin.dashboard.index');
        }

        else if (Auth::user()->role == 'pemohon') {
            return view('pemohon.dashboard.index');
        }

        else if (Auth::user()->role == 'pengawas') {
            return view('pengawas.dashboard.index');
        }

        else if (Auth::user()->role == 'petugas') {
            $antrian = antrian::where('petugas_id', null)->get();
            $today = Carbon::today()->toDateString();
            return view('petugas.dashboard.index', compact('antrian', 'today'));
        }

        else if(Auth::user()->role == 'customer-service') {
            return view('customer-service.dashboard.index');
        }

        else {
            return view('home');
        }

    }

    public function take_antrian($id) {
        $petugas = petugas::where('user_id', Auth::user()->id)->first();
        $antrian = antrian::where('id', $id)->first();
        $antrian->update([
            'petugas_id' => $petugas->id
        ]);

        $pengajuan_perusahaan = pengajuan_perusahaan::where('perusahaan_id', $antrian->perusahaan_id)->where('petugas_id', null)->where('tanggal_permohonan', $antrian->tanggal_permohonan)->first();
        if($pengajuan_perusahaan) {
            $pengajuan_perusahaan->update([
                'petugas_id' => $petugas->id
            ]);
        }

        $angkutan = angkutan::where('perusahaan_id', $antrian->perusahaan_id)->get();

        foreach ($angkutan as $item) {
            $pengajuan_angkutan = pengajuan_angkutan::where('angkutan_id', $item->id)->where('petugas_id', null)->where('tanggal_permohonan', $antrian->tanggal_permohonan)->first();
            if($pengajuan_angkutan) {
                $pengajuan_angkutan->update([
                    'petugas_id' => $petugas->id
                ]);
            }
        }
        

        if($antrian) {
            if($pengajuan_perusahaan) {
                return redirect()->route('perusahaan.index')->with(['success'=>'data berhasil diambil']);
            } else {
                return redirect()->route('angkutan.index')->with(['success'=>'data berhasil diambil']);
            }
        } else {
            return redirect()->route('home')->with(['gagal'=>'data gagal diambil']);
        }
    }
}
