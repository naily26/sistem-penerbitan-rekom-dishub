<?php

namespace App\Http\Controllers;

use App\Models\dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = dokumen::all();
        return view('admin.dokumen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $this->uploadFile($request, 'file_template');
        $doc = dokumen::create([
            'nama' => $request->nama,
            'file_template' => $file
        ]);
        if($doc) {
            return redirect()->route('dokumen.index')->with(['sukses'=>'data berhasil ditambahkan']);
        } else {
            return redirect()->route('dokumen.index')->with(['gagal'=>'data gagal ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = dokumen::find($id)->first();
        return view('admin.dokumen.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = dokumen::find($id)->first();
        $file = $data->file_template;
        if ($request->file_template) {
            $file = $this->uploadFile($request, 'file_template');
        }
        $data->update([
            'nama' => $request->nama,
            'file_template' => $file
        ]);
        if($data) {
            return redirect()->route('dokumen.index')->with(['sukses'=>'data berhasil ditambahkan']);
        } else {
            return redirect()->route('dokumen.index')->with(['gagal'=>'data gagal ditambahkan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dokumen $dokumen)
    {
        
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
            $result = '/'.'admin/'.$oke.''.'/'.$tmp_file_name;
        return $result;
    }
}
