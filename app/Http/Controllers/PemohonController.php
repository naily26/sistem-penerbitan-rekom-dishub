<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PemohonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = User::whereIn('role', ['pemohon', 'suspended'])->get();
        return view('admin.pemohon.index', compact('data'));
    }

    public function PenangguhanAkun($id) {
        $akun = User::where('id', $id)->first();
        $akun->role = 'suspended';
        $akun->save();
        if($akun) {
            return redirect()->to('/pemohon')->with(['success'=>'akun berhasil ditangguhkan']);
        } else {
            return redirect()->to('/pemohon')->with(['gagal'=>'akun gagal ditangguhkan']);
        }
    }

    public function PemulihanAkun($id) {
        $akun = User::where('id', $id)->first();
        $akun->role = 'pemohon';
        $akun->save();
        if($akun) {
            return redirect()->to('/pemohon')->with(['success'=>'akun berhasil dipulihkan']);
        } else {
            return redirect()->to('/pemohon')->with(['gagal'=>'akun gagal dipulihkan']);
        }
    }
}
