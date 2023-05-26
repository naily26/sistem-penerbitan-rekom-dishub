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
        $arr = [];
        foreach ($petugas as $key => $value) {
            $perusahaanMasukPetugas = pengajuan_perusahaan::whereBetween('tanggal_permohonan', [$from, $to])->where('petugas_id', $value->id)->get();
            $perusahaanKeluarPetugas = pengajuan_perusahaan::whereBetween('tanggal_cetak', [$from, $to])->where('petugas_id', $value->id)->get();
            $angkutanMasukPetugas = pengajuan_angkutan::whereBetween('tanggal_permohonan', [$from, $to])->where('petugas_id', $value->id)->get();
            $angkutanKeluarPetugas = pengajuan_angkutan::whereBetween('tanggal_cetak', [$from, $to])->where('petugas_id', $value->id)->get();
            $arr[$key]['kode'] = $value->kode; 
            $arr[$key]['nama'] = $value->nama; 
            $arr[$key]['perusahaanMasukPetugas'] = count($perusahaanMasukPetugas);
            $arr[$key]['perusahaanKeluarPetugas'] = count($perusahaanKeluarPetugas);
            $arr[$key]['angkutanMasukPetugas'] = count($angkutanMasukPetugas);
            $arr[$key]['angkutanKeluarPetugas'] = count($angkutanKeluarPetugas);
        }
        $data['rekap_petugas'] = $arr;
        
        //dd($data);
        return view('admin.report.index');
    }
}
