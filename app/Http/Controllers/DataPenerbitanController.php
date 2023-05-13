<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DataPenerbitanController extends Controller
{
    public function indexPerusahaan() {
        if (Auth::user()->role == 'admin') {
            return view('admin.data-penerbitan.perusahaan');
        } elseif (Auth::user()->role == 'customer-service') {
            return view('customer-service.data-penerbitan.perusahaan');
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
