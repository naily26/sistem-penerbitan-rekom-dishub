<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\perusahaan;
use App\Models\pengajuan_perusahaan;
use Carbon\Carbon;

class DataPenerbitanController extends Controller
{
    public function indexPerusahaan() {
        $today = Carbon::today()->toDateString();
        if (Auth::user()->role == 'admin') {
            return view('admin.data-penerbitan.perusahaan');
        } elseif (Auth::user()->role == 'customer-service') {
            $disetujui = pengajuan_perusahaan::where('status_pengecekan', 'disetujui')->get();
            return view('customer-service.data-penerbitan.perusahaan', compact('disetujui', 'today'));
        }
       
    }

    public function indexAngkutan() {
        if (Auth::user()->role == 'admin') {
            return view('admin.data-penerbitan.angkutan');
        } elseif (Auth::user()->role == 'customer-service') {
            return view('customer-service.data-penerbitan.angkutan');
        }
    }
}
