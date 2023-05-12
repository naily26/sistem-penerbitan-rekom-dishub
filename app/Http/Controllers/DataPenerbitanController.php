<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPenerbitanController extends Controller
{
    public function indexPerusahaan() {
        return view('admin.data-penerbitan.angkutan');
    }
}
