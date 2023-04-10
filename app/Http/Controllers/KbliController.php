<?php

namespace App\Http\Controllers;

use App\Models\kbli;
use App\Models\User;
use Illuminate\Http\Request;

class KbliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $kbli = kbli::all();
        return view('admin.kbli.index', compact('kbli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kbli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate(
            [
                'kode',
                'keterangan',
                'kategori',
                'uraian'
            ]
        );

        $cek = kbli::create($request->all());
        if($cek) {
            return redirect()->route('kbli.index')->with(['sukses'=>'data berhasil ditambahkan']);
        } else {
            return redirect()->route('kbli.index')->with(['gagal'=>'data gagal ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kbli  $kbli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kbli = kbli::find($id);
        return view('admin.kbli.detail', compact('kbli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kbli  $kbli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kbli = kbli::find($id);
        return view('admin.kbli.edit', compact('kbli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kbli  $kbli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'kode',
                'keterangan',
                'kategori',
                'uraian'
            ]
        );
        $cek = kbli::find($id)->update($request->all());
        if($cek) {
            return redirect()->route('kbli.index')->with(['success'=>'data berhasil diperbarui']);
        } else {
            return redirect()->route('kbli.index')->with(['gagal'=>'data gagal diperbarui']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kbli  $kbli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kbli = kbli::find($id);
        $cek = kbli::find($id)->delete();
        if($cek) {
            return redirect()->route('kbli.index')->with(['success'=>'data berhasil dihapus']);
        } else {
            return redirect()->route('kbli.index')->with(['gagal'=>'data gagal dihapus']);
        }
    }
}
