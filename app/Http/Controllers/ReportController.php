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
        $perusahaanMasuk = pengajuan_perusahaan::whereBetween('tanggal_permohonan', [$from, $to])->get();
        $perusahaanKeluar = pengajuan_perusahaan::whereBetween('tanggal_cetak', [$from, $to])->get();
        $angkutanMasuk = pengajuan_angkutan::whereBetween('tanggal_permohonan', [$from, $to])->get();
        $angkutanKeluar = pengajuan_angkutan::whereBetween('tanggal_cetak', [$from, $to])->get();

        //proses surat

        
        //counting
        $data;
        $data['start'] = $from;
        $data['end'] = $to;
        $data['perusahaanMasuk'] = count($perusahaanMasuk);
        $data['perusahaanKeluar'] = count($perusahaanKeluar);
        $data['angkutanMasuk'] = count($angkutanMasuk);
        $data['angkutanKeluar'] = count($angkutanKeluar);

        $petugas = petugas::all();
        $arr;
        foreach ($petugas as $key => $value) {
            $perusahaanMasukPetugas = pengajuan_perusahaan::whereBetween('tanggal_permohonan', [$from, $to])->where('petugas_id', $value->id)->get();
            $angkutanMasukPetugas = pengajuan_angkutan::whereBetween('tanggal_permohonan', [$from, $to])->where('petugas_id', $value->id)->get();
            $arr[$key]['kode'] = $value->kode; 
            $arr[$key]['nama'] = $value->nama; 
            $arr[$key]['perusahaanPetugas'] = count($perusahaanMasukPetugas);
            $arr[$key]['angkutanPetugas'] = count($angkutanMasukPetugas);
        }
        $data['rekap_petugas'] = $arr;
        
        //dd($data['rekap_petugas'][0]);
        return view('admin.report.index', compact('data'));
    }
}
