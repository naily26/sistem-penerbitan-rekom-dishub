<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
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
        $petugas = petugas::all();
        return view('admin.petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.petugas.create');
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
        
        $pw = 'petugas'.$request->kode;
        $role = ['petugas'];

        $user = User::create([
            'name' =>$request->nama,
            'role'  == $role,
            'email' =>$request->email,
            'password' => Hash::make($pw),
            'remember_token' => Str::random(10),
        ]);
         $user->update([$user->role = 'petugas']);
        

        $petugas = petugas::create([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'kode' => $request->kode,
            'jabatan' => $request->jabatan,
            'no_hp' => $request->no_hp,
        ]);

        if($petugas) {
            return redirect()->to('/pegawai')->with(['success'=>'data berhasil ditambahkan']);
        } else {
            return redirect()->to('/pegawai')->with(['gagal'=>'data gagal ditambahkan']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = petugas::find($id);
        return view('admin.petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('email',$request->email)->update([
            'name' => $request->nama,
            'role'  => 'petugas',
            'email' => $request->email
        ]);
        if(!is_null($request->password)) {
            User::where('email',$request->email)->update([
                'password' => Hash::make($request->password)
            ]);
        }

        $petugas = petugas::where('id',$id)->update([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'jabatan' => $request->jabatan,
            'no_hp' => $request->no_hp,
        ]);

        if($petugas){
            return redirect()->to('/pegawai')->with(['success'=>'data berhasil diupdate']);
        }
        else{
            return redirect()->to('/pegawai')->with(['error'=>'data error diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = petugas::find($id);
        $user = User::where('id', $petugas->user_id)->first();
        $user->delete();
        $cek = $petugas->delete();
        if($cek) {
            return redirect()->to('/pegawai')->with(['success'=> 'data berhasil dihapus']);
        } else {
            return redirect()->to('/pegawai')->with(['gagal'=>'data gagal dihapus']);
        }
    }

    public function checkemail($nama) {

        $cek = User::where('email',$nama)->first();
        $val = true;
        if($cek)
        {
            $val = false;
        } 
        return $val;
    }
}
