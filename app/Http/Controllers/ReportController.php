<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengajuan_perusahaan;
use App\Models\pengajuan_angkutan;
use App\Models\petugas;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $now = Carbon::now();
        $start = Carbon::now()->startOfMonth();
        $from = date($start->toDateString());
        $to = date($now->toDateString());
       
        $data = $this->counting($from, $to);
        return view('admin.report.index', compact('data', 'from', 'to'));
    }

    public function filterReport(Request $request) {
        $from = date($request->start);
        $to = date($request->end);
        //dd($request->end);

        $data = $this->counting($from, $to);
        return view('admin.report.index', compact('data', 'from', 'to'));
    }

    public function counting($from, $to) {
        $perusahaanMasuk = pengajuan_perusahaan::whereBetween('tanggal_permohonan', [$from, $to])->get();
        $perusahaanDicetak = pengajuan_perusahaan::whereBetween('tanggal_cetak', [$from, $to])->get();
        $perusahaanBirokrasi = pengajuan_perusahaan::whereBetween('tanggal_birokrasi', [$from, $to])->get();
        $perusahaanTertandatangai = pengajuan_perusahaan::whereBetween('tanggal_penerbitan', [$from, $to])->get();
        $perusahaanDiambil = pengajuan_perusahaan::whereBetween('tanggal_pengambilan', [$from, $to])->get();
        $angkutanMasuk = pengajuan_angkutan::whereBetween('tanggal_permohonan', [$from, $to])->get();
        $angkutanDicetak = pengajuan_angkutan::whereBetween('tanggal_cetak', [$from, $to])->get();
        $angkutanBirokrasi = pengajuan_angkutan::whereBetween('tanggal_birokrasi', [$from, $to])->get();
        $angkutanTertandatangai = pengajuan_angkutan::whereBetween('tanggal_penerbitan', [$from, $to])->get();
        $angkutanDiambil = pengajuan_angkutan::whereBetween('tanggal_pengambilan', [$from, $to])->get();
        //proses surat

        
        //counting
        $data;
        $data['start'] = $from;
        $data['end'] = $to;
        $data['perusahaanMasuk'] = count($perusahaanMasuk);
        $data['perusahaanDicetak'] = count($perusahaanDicetak);
        $data['perusahaanBirokrasi'] = count($perusahaanBirokrasi);
        $data['perusahaanTertandatangai'] = count($perusahaanTertandatangai);
        $data['perusahaanDiambil'] = count($perusahaanDiambil);

        $data['angkutanMasuk'] = count($angkutanMasuk);
        $data['angkutanDicetak'] = count($angkutanDicetak);
        $data['angkutanBirokrasi'] = count($angkutanBirokrasi);
        $data['angkutanTertandatangai'] = count($angkutanTertandatangai);
        $data['angkutanDiambil'] = count($angkutanDiambil);

        $petugas = petugas::all();
        $arr = [];
        foreach ($petugas as $key => $value) {
            $perusahaanMasukPetugas = pengajuan_perusahaan::whereBetween('tanggal_permohonan', [$from, $to])->where('petugas_id', $value->id)->get();
            $angkutanMasukPetugas = pengajuan_angkutan::whereBetween('tanggal_permohonan', [$from, $to])->where('petugas_id', $value->id)->get();
            $arr[$key]['kode'] = $value->kode; 
            $arr[$key]['nama'] = $value->nama; 
            $arr[$key]['skp'] = count($perusahaanMasukPetugas);
            $arr[$key]['srpa'] = count($angkutanMasukPetugas);
        }
        $data['rekap_petugas'] = $arr;
        return $data;
    }
}
