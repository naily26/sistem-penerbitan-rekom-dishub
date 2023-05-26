<?php

namespace App\Http\Controllers;

use App\Models\data_tampilan;
use Illuminate\Http\Request;

class DataTampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $data = data_tampilan::first();
        return view('admin.data-tampilan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'dasar_hukum',
                'isi_dasar_hukum',
                'foto_persyaratan',
                'persyaratan',
                'video',
                'dokumen_pedoman',
                'deskripsi_lembaga',
                'alamat_lembaga',
                'telepon_lembaga',
                'email_lembaga',
                'foto_lembaga'
            ]
        );
        
        $data = data_tampilan::first();
        if($data == null ) {
            $cek =  data_tampilan::create($request->all());
            if($request->foto_persyaratan) { $cek->foto_persyaratan = $this->uploadFile($request, 'foto_persyaratan');}
            if($request->dokumen_pedoman) {$cek->dokumen_pedoman = $data_dokumen_pedoman = $this->uploadFile($request, 'dokumen_pedoman');}
            if($request->foto_lembaga) {$cek->foto_lembaga = $data_foto_lembaga = $this->uploadFile($request, 'foto_lembaga');}
            $cek->save();
        } else {
            $cek = $data->update($request->all());
            if($request->foto_persyaratan) { $cek->foto_persyaratan = $this->uploadFile($request, 'foto_persyaratan');}
            if($request->dokumen_pedoman) {$cek->dokumen_pedoman = $data_dokumen_pedoman = $this->uploadFile($request, 'dokumen_pedoman');}
            if($request->foto_lembaga) {$cek->foto_lembaga = $data_foto_lembaga = $this->uploadFile($request, 'foto_lembaga');}
            $data->save();
        }

        if($cek) {
            return redirect()->route('data-tampilan.index')->with(['success'=>'data berhasil diperbarui']);
        } else {
            return redirect()->route('data-tampilan.index')->with(['gagal'=>'data gagal diperbarui']);
        }
    }

    public function uploadFile(Request $request,$oke)
    {
            $result ='';
            $file = $request->file($oke);
            $name = $file->getClientOriginalName();
            $extension = explode('.',$name);
            $extension = strtolower(end($extension));
            $key = rand().'-'.$oke;
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = "admin/".$oke."/";
            $file->move($tmp_file_path,$tmp_file_name);
            $result = url('/').'/'.'admin/'.$oke.''.'/'.$tmp_file_name;
        return $result;
    }

    /**
     * Display the specified resource.
     */
    public function show(data_tampilan $data_tampilan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(data_tampilan $data_tampilan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, data_tampilan $data_tampilan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_tampilan $data_tampilan)
    {
        //
    }
}
