<?php

namespace App\Http\Controllers;

use App\Models\pengawas;
use Illuminate\Http\Request;
use App\Models\User;

class PengawasController extends Controller
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
        $pengawas = pengawas::all();
        return view('admin.pengawas.index', compact('pengawas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengawas.create');
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
                'email' => 'required|email|unique:users',
            ]);
        
        $user = User::create([
            'name' =>$request->nama,
            'role'  =>'pengawas',
            'email' =>$request->email,
            'password'   =>bcrypt(12345678),
        ]);

        $pengawas = pengawas::create([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'lembaga' => $request->lembaga,
            'jabatan' => $request->jabatan,
        ]);

        if($pengawas) {
            return redirect()->route('pengawas.index')->with(['success'=>'data berhasil ditambahkan']);
        } else {
            return redirect()->route('pengawas.index')->with(['gagal'=>'data gagal ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengawas  $pengawas
     * @return \Illuminate\Http\Response
     */
    public function show(pengawas $pengawas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengawas  $pengawas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengawas = pengawas::find($id);
        return view('admin.pengawas.edit', compact('pengawas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengawas  $pengawas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('email',$request->email)->update([
            'name' =>$request->nama,
            'role'  =>'pengawas',
            'email' =>$request->email
        ]);

        $pengawas = pengawas::where('id',$id)->update([
            'nama' => $request->nama,
            'lembaga' => $request->lembaga,
            'jabatan' => $request->jabatan,
        ]);

        if($pengawas){
            return redirect()->route('pengawas.index')->with(['success'=>'data berhasil diupdate']);
        }
        else{
            return redirect()->route('pengawas.index')->with(['error'=>'data error diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengawas  $pengawas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengawas = pengawas::find($id);
        $user = User::where('id', $pengawas->user_id)->first();
        $user->delete();
        $cek = $pengawas->delete();
        if($cek) {
            return redirect()->route('pengawas.index')->with('success', 'data berhasil dihapus');
        } else {
            return redirect()->route('pengawas.index')->with(['gagal'=>'data gagal dihapus']);
        }
    }
}
