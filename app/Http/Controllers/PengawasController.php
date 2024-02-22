<?php

namespace App\Http\Controllers;

use App\Models\pengawas;
use App\Models\petugas;
use App\Models\customer_service;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
        $petugas = petugas::all();
        $cs = customer_service::all();
        return view('admin.pengawas.index', compact('pengawas', 'petugas', 'cs'));
    }

    public function indexPegawai()
    {
        $pengawas = pengawas::all();
        $petugas = petugas::all();
        $cs = customer_service::all();
        return view('admin.pegawai.index', compact('pengawas', 'petugas', 'cs'));
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
        $pw = strtok($request->email, '@');
        $user = User::create([
            'name' =>$request->nama,
            'role'  =>'pengawas',
            'email' =>$request->email,
            'password'   =>bcrypt($pw),
        ]);
        $user->update([$user->role = 'pengawas']);

        $pengawas = pengawas::create([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'lembaga' => $request->lembaga,
            'jabatan' => $request->jabatan,
        ]);

        if($pengawas) {
            return redirect()->to('/pegawai')->with(['success'=>'data berhasil ditambahkan']);
        } else {
            return redirect()->to('/pegawai')->with(['gagal'=>'data gagal ditambahkan']);
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

        if(!is_null($request->password)) {
            User::where('email',$request->email)->update([
                'password' => Hash::make($request->password)
            ]);
        }
        $pengawas = pengawas::where('id',$id)->update([
            'nama' => $request->nama,
            'lembaga' => $request->lembaga,
            'jabatan' => $request->jabatan,
        ]);

        if($pengawas){
            return redirect()->to('/pegawai')->with(['success'=>'data berhasil diupdate']);
        }
        else{
            return redirect()->to('/pegawai')->with(['error'=>'data error diupdate']);
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
            return redirect()->to('/pegawai')->with('success', 'data berhasil dihapus');
        } else {
            return redirect()->to('/pegawai')->with(['gagal'=>'data gagal dihapus']);
        }
    }

    public function uploadProfile(Request $request) {
        $user = user::find($request->id);
        $foto = null;
        $foto = $this->uploadFile($request, 'foto');
        $user->foto = $foto;
        $user->save();
        if(!is_null($foto)) {
            return redirect()->back()->with('success', 'data berhasil disimpan');
        } else {
            return redirect()->back()->with(['gagal'=>'data gagal disimpan']);
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
            $result = '/'.'admin/'.$oke.''.'/'.$tmp_file_name;
        return $result;
    }
}
