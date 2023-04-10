<?php

namespace App\Http\Controllers;

use App\Models\angkutan;
use App\Models\perusahaan;
use App\Models\kbli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AngkutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'pemohon') {
            $kbli = kbli::all();
            return view('pemohon.angkutan.index', compact('kbli'));
        } elseif (Auth::user()->role == 'petugas') {
            return view('petugas.angkutan.index');
        } elseif (Auth::user()->role == 'pengawas') {
            return view('pengawas.angkutan.index');
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.angkutan.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kbli = kbli::all();
        $perusahaan = perusahaan::where('user_id', Auth::user()->id)->get();
        return view('pemohon.angkutan.create', compact('kbli', 'perusahaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()->role == 'pemohon') {
            return view('pemohon.angkutan.detail');
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.angkutan.detail');
        } 
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->role == 'petugas') {
            return view('petugas.angkutan.edit');
        } elseif (Auth::user()->role == 'pemohon') {
            return view('pemohon.angkutan.edit');
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.angkutan.edit');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, angkutan $angkutan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function destroy(angkutan $angkutan)
    {
        //
    }
}
?>
