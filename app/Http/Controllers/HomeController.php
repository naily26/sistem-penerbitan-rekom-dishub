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
            $data = $this->countingHome();
            return view('admin.dashboard.index', compact('data'));
        }

        else if (Auth::user()->role == 'pemohon') {
            // Counting perusahaan
            $perusahaan = perusahaan::where('user_id', Auth::user()->id)->get();
            $data_perusahaan = [];
            foreach ($perusahaan as $key => $value) {
                $data_perusahaan[$key] = $value->id;
            }
            $perusahaan_disetujui = pengajuan_perusahaan::whereIn('perusahaan_id', $data_perusahaan)->where('status_pengecekan', 'disetujui')->get();
            $data['perusahaan_disetujui'] = count($perusahaan_disetujui);
            $perusahaan_ditolak = pengajuan_perusahaan::whereIn('perusahaan_id', $data_perusahaan)->where('status_pengecekan', 'ditolak')->get();
            $data['perusahaan_ditolak'] = count($perusahaan_ditolak);
            $perusahaan_diproses = pengajuan_perusahaan::whereIn('perusahaan_id', $data_perusahaan)->where('status_pengecekan', 'menunggu')->get();
            $data['perusahaan_diproses'] = count($perusahaan_diproses);
            
            //counting angkutan
            $data_angkutan = [];
            $angkutan = angkutan::where('user_id', Auth::user()->id)->get();
            foreach ($angkutan as $key => $value) {
                $data_angkutan[$key] = $value->id;
            }
            $angkutan_disetujui = pengajuan_angkutan::whereIn('angkutan_id', $data_angkutan)->where('status_pengecekan', 'disetujui')->get();
            $data['angkutan_disetujui'] = count($angkutan_disetujui);
            $angkutan_ditolak = pengajuan_angkutan::whereIn('angkutan_id', $data_angkutan)->where('status_pengecekan', 'ditolak')->get();
            $data['angkutan_ditolak'] = count($angkutan_ditolak);
            $angkutan_diproses = pengajuan_angkutan::whereIn('angkutan_id', $data_angkutan)->where('status_pengecekan', 'menunggu')->get();
            $data['angkutan_diproses'] = count($angkutan_diproses);
                
            return view('pemohon.dashboard.index', compact('data'));
        }

        else if (Auth::user()->role == 'pengawas') {
            $data = $this->countingHome();
            return view('pengawas.dashboard.index', compact('data'));
        }

        else if (Auth::user()->role == 'petugas') {
            $antrian = antrian::where('petugas_id', null)->get();
            $today = Carbon::today()->toDateString();
            $petugas = petugas::where('user_id', Auth::user()->id)->first();
           //counting perusahaan
            $perusahaan_menunggu = pengajuan_perusahaan::where('status_pengecekan', 'disetujui')->where('status_penerbitan', 'menunggu')->where('petugas_id', $petugas->id)->get();
            $data['perusahaan_menunggu'] = count($perusahaan_menunggu);
            $perusahaan_diproses = pengajuan_perusahaan::where('status_pengecekan', 'menunggu')->where('petugas_id', $petugas->id)->get();
            $data['perusahaan_diproses'] = count($perusahaan_diproses);
            //counting angkutan
            $angkutan_menunggu = pengajuan_angkutan::where('status_pengecekan', 'disetujui')->where('status_penerbitan', 'menunggu')->where('petugas_id', $petugas->id)->get();
            $data['angkutan_menunggu'] = count($angkutan_menunggu);
            $angkutan_diproses = pengajuan_angkutan::where('status_pengecekan', 'menunggu')->where('petugas_id', $petugas->id)->get();
            $data['angkutan_diproses'] = count($angkutan_diproses);
                return view('petugas.dashboard.index', compact('antrian', 'today', 'data'));
            }

        else if(Auth::user()->role == 'customer-service') {
            $data = $this->countingHome();
            return view('customer-service.dashboard.index', compact('data'));
        } elseif (Auth::user()->role == 'suspended') {
            Auth::logout();
            return redirect('/login')->with('message', 'Akun anda ditangguhkan, silahkan hubungi admin!');
        }

        else {
            return view('home');
        }

    }

    public function countingHome() {
        //counting perusahaan
        $perusahaan_disetujui = pengajuan_perusahaan::where('status_pengecekan', 'disetujui')->get();
        $data['perusahaan_disetujui'] = count($perusahaan_disetujui);
        $perusahaan_ditolak = pengajuan_perusahaan::where('status_pengecekan', 'ditolak')->get();
        $data['perusahaan_ditolak'] = count($perusahaan_ditolak);
        $perusahaan_diproses = pengajuan_perusahaan::where('status_pengecekan', 'menunggu')->get();
        $data['perusahaan_diproses'] = count($perusahaan_diproses);
        //counting angkutan
        $angkutan_disetujui = pengajuan_angkutan::where('status_pengecekan', 'disetujui')->get();
        $data['angkutan_disetujui'] = count($angkutan_disetujui);
        $angkutan_ditolak = pengajuan_angkutan::where('status_pengecekan', 'ditolak')->get();
        $data['angkutan_ditolak'] = count($angkutan_ditolak);
        $angkutan_diproses = pengajuan_angkutan::where('status_pengecekan', 'menunggu')->get();
        $data['angkutan_diproses'] = count($angkutan_diproses);

        return $data;
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
