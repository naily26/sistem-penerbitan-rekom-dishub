<?php

namespace App\Http\Controllers;

use App\Models\perusahaan;
use App\Models\antrian;
use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kbli;

use PDF;
use Carbon\Carbon;

class PerusahaanController extends Controller
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
            $perusahaan = perusahaan::where('user_id', Auth::user()->id)
                            ->orderBy('created_at','DESC')->get();
            return view('pemohon.perusahaan.index', compact('kbli', 'perusahaan'));
            
        } elseif (Auth::user()->role == 'petugas') {
            $data_petugas = petugas::where('user_id', Auth::user()->id)->first();
            $today = Carbon::today()->toDateString();
            $diproses = perusahaan::where('status_pengecekan', 'menunggu')->where('petugas_id', $data_petugas->id)->get();
            $disetujui = perusahaan::where('status_pengecekan', 'disetujui')->where('petugas_id', $data_petugas->id)->get();
            $ditolak = perusahaan::where('status_pengecekan', 'ditolak')->where('petugas_id', $data_petugas->id)->get();
            return view('petugas.perusahaan.index', compact('diproses', 'disetujui', 'ditolak', 'today'));
        } elseif (Auth::user()->role == 'pengawas') {
            return view('pengawas.perusahaan.index');
        } elseif (Auth::user()->role == 'admin') {
            $today = Carbon::today()->toDateString();
            $diproses = perusahaan::where('status_pengecekan_1', 'menunggu')->get();
            $disetujui = perusahaan::where('status_pengecekan_1', 'disetujui')->get();
            $ditolak = perusahaan::where('status_pengecekan_1', 'ditolak')->get();
            return view('admin.perusahaan.index', compact('diproses', 'disetujui', 'ditolak', 'today'));
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
        $nibcek = perusahaan::all('nib');
        return view('pemohon.perusahaan.create', compact('kbli', 'nibcek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {

        $today = Carbon::today()->toDateString();
        $file_dokumen_nib = $request->file('dokumen_nib') != null ?  $this->uploadFile($request, 'dokumen_nib') : null;
        $file_sertifikat_standar = $request->file('sertifikat_standar') != null ? $this->uploadFile($request, 'sertifikat_standar') : null ;
        $file_surat_pernyataan = $request->file('surat_pernyataan') != null ? $this->uploadFile($request, 'surat_pernyataan') : null;
        $file_surat_permohonan = $request->file('surat_permohonan') != null ? $this->uploadFile($request, 'surat_permohonan') : null;
        $file_surat_izin_trayek = $request->file('surat_izin_trayek') != null ?  $this->uploadFile($request, 'surat_izin_trayek') : null;
        $file_surat_delivery_order = $request->file('surat_delivery_order') != null ? $this->uploadFile($request, 'surat_delivery_order') : null;


        $perusahaan = perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_pimpinan' => $request->nama_pimpinan,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'nib' => $request->nib,
            'dokumen_nib' => $file_dokumen_nib,
            'tanggal_nib' => $request->tanggal_nib,
            'sertifikat_standar' =>  $file_sertifikat_standar,
            'surat_izin_trayek' => $file_surat_izin_trayek,
            'surat_delivery_order' => $file_surat_delivery_order,
            'surat_pernyataan' => $file_surat_pernyataan,
            'surat_permohonan' => $file_surat_permohonan,
            'nomor_permohonan'=> $request->nomor_permohonan,
            'tanggal_permohonan' => $today,
            'kbli_id' => $request->kbli_id,
            'user_id' => Auth::user()->id,
        ]);

        if($perusahaan) {
            $antrian = antrian::create([
                'perusahaan_id' => $perusahaan->id,
                'tanggal_permohonan' => $today,
                'jumlah_perusahaan' => 1,
            ]);
        }

        if($perusahaan) {
            return redirect()->route('perusahaan.index')->with(['success'=>'data berhasil ditambahkan']);
        } else {
            return redirect()->route('perusahaan.index')->with(['gagal'=>'data gagal ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = perusahaan::where('id', $id)->first(); 
        if (Auth::user()->role == 'pemohon') {
            return view('pemohon.perusahaan.detail', compact('data'));
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.perusahaan.detail', compact('data'));
        } elseif (Auth::user()->role == 'petugas') {
            return view('petugas.perusahaan.detail', compact('data'));
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = perusahaan::where('id', $id)->first();
        if (Auth::user()->role == 'petugas') {
            return view('petugas.perusahaan.edit', compact('data'));
        } elseif (Auth::user()->role == 'pemohon') {
            $kbli = kbli::all();
            return view('pemohon.perusahaan.edit', compact('data', 'kbli'));
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.perusahaan.edit', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status;
        $today = Carbon::today()->toDateString();
        
        if (Auth::user()->role == 'admin') {
            $data = perusahaan::where('id',$id)->first();
            $data->update([
                'status_pengecekan_1' => $request->status_pengecekan_1,
                'catatan' => $request->catatan,
            ]);

            if($data->status_pengecekan_1 == 'disetujui') {
                $data->catatan = null;
                $data->save();
                $antrian = antrian::create([
                    'perusahaan_id' => $data->id,
                    'tanggal_permohonan' => $today,
                    'jumlah_perusahaan' => 1,
                ]);
            }
            $status = $data;

        } elseif (Auth::user()->role == 'petugas') {
            // $status = perusahaan::where('id',$id)->update([
            //     'status_pengecekan_2',
            //     'catatan' ,
            // ]);
            $status = perusahaan::where('id',$id)->first();
            $status->update($request->all());

        } elseif (Auth::user()->role == 'pemohon') {

            $find = perusahaan::where('id',$id)->first();
            $find->update([
                'nama_perusahaan',
                'nama_pimpinan' ,
                'nomor_telepon' ,
                'alamat' ,
                'nib',
                'dokumen_nib' ,
                'tanggal_nib' ,
            ]);

            if( $request->file('dokumen_nib')) {
                $find->dokumen_nib = $this->uploadFile($request, 'dokumen_nib');
            } 
            if ($request->file('surat_pernyataan')) {
                $find->surat_pernyataan = $this->uploadFile($request, 'surat_pernyataan');
            } 
            if ($request->file('surat_permohonan')) {
                $find->surat_permohonan = $this->uploadFile($request, 'surat_permohonan');
            }
            if ($request->file('surat_izin_trayek')) {
                $find->surat_izin_trayek = $this->uploadFile($request, 'surat_izin_trayek');
            }
            if ($request->file('surat_delivery_order')) {
                $find->surat_delivery_order = $this->uploadFile($request, 'surat_delivery_order');
            }

            if($find->status_pengecekan_1 == 'ditolak') {$find->status_pengecekan_1 = 'menunggu'; $find->catatan = $find->catatan  .' \n telah diperbarui pada '.$today;} 
            if($find->status_pengecekan_2 == 'ditolak')  {$find->status_pengecekan_2 = 'menunggu'; $find->catatan = $find->catatan . ' \n telah diperbarui pada '.$today;}
            $find->catatan = $find->catatan.'telah diperbarui pada tanggal'.$today;
            $find->save();
            
            $status = true;
        }
        if($status) {
            return redirect()->route('perusahaan.index')->with(['success'=>'data berhasil diperbaharui']);
        } else {
            return redirect()->route('perusahaan.index')->with(['gagal'=>'data gagal diperbaharui']);
        }
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = perusahaan::where('id', $id)->first();
        $data->delete();
        if($data) {
            return redirect()->route('perusahaan.index')->with(['success'=>'data berhasil dihapus']);
        } else {
            return redirect()->route('perusahaan.index')->with(['gagal'=>'data gagal dihapus']);
        }

    }


    public function cetak_surat($id){
        $today = Carbon::today()->toDateString();
        $detail = perusahaan::where('id', $id)->first();
        $view;
        if($detail->kbli->kategori == 'angkutan-penumpang-umum') {
            $view = 'petugas.perusahaan.pdf-view';
        } else {
            $view = 'petugas.perusahaan.pdf-view-barang';
        }
        $data = PDF::loadview( $view, compact('detail', 'today'));
    	 return $data->stream('laporan.pdf');
        
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

    public function cekAntrian($id) {
        $today = Carbon::today()->toDateString();
        $cek = antrian::where('perusahaan_id', $id)->where('tanggal_permohonan', $today)->where('petugas_id', null);

        if ($cek == null ){
            antrian::create([
                'perusahaan_id' => $id,
                'tanggal_permohonan' => $today,
                'jumlah_perusahaan' => 1,
            ]);
        }
    }
}
