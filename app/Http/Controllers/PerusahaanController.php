<?php

namespace App\Http\Controllers;

use App\Models\perusahaan;
use App\Models\pengajuan_perusahaan;
use App\Models\antrian;
use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kbli;
use App\Models\dokumen;
use App\Models\angkutan;
use App\Models\pengajuan_angkutan;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifPerusahaan;

use PDF;
use Carbon\Carbon;

class PerusahaanController extends Controller
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
        if (Auth::user()->role == 'pemohon') {
            $kbli = kbli::all();
            $perusahaan = perusahaan::where('user_id', Auth::user()->id)->get();
            return view('pemohon.perusahaan.index', compact('kbli', 'perusahaan'));
            
        } elseif (Auth::user()->role == 'petugas') {
            $data_petugas = petugas::where('user_id', Auth::user()->id)->first();
            $perusahaan_menunggu = pengajuan_perusahaan::where('status_pengecekan', 'disetujui')->where('status_penerbitan', 'menunggu')->where('petugas_id', $data_petugas->id)->get();
            $data['perusahaan_menunggu'] = count($perusahaan_menunggu);
            $perusahaan_diproses = pengajuan_perusahaan::where('status_pengecekan', 'menunggu')->where('petugas_id', $data_petugas->id)->get();
            $data['perusahaan_diproses'] = count($perusahaan_diproses);
            $today = Carbon::today()->toDateString();
            $diproses = pengajuan_perusahaan::where('status_pengecekan', 'menunggu')->where('petugas_id', $data_petugas->id)->get();
            $disetujui = pengajuan_perusahaan::where('status_pengecekan', 'disetujui')->where('petugas_id', $data_petugas->id)->get();
            $ditolak = pengajuan_perusahaan::where('status_pengecekan', 'ditolak')->where('petugas_id', $data_petugas->id)->get();
            return view('petugas.perusahaan.index', compact('diproses', 'disetujui', 'ditolak', 'today', 'data'));
        } elseif (Auth::user()->role == 'pengawas') {
            $disetujui = pengajuan_perusahaan::where('status_pengecekan', 'disetujui')->get();
            return view('pengawas.perusahaan.index', compact('disetujui'));
        } elseif (Auth::user()->role == 'admin') {
            $today = Carbon::today()->toDateString();
            $diproses = pengajuan_perusahaan::where('status_pengecekan', 'menunggu')->get();
            $disetujui = pengajuan_perusahaan::where('status_pengecekan', 'disetujui')->where('tanggal_pengambilan', null)->get();
            $ditolak = pengajuan_perusahaan::where('status_pengecekan', 'ditolak')->get();
            $perusahaan_menunggu = pengajuan_perusahaan::where('status_pengecekan', 'disetujui')->whereIn('status_penerbitan', ['dicetak', 'birokrasi'])->get();
            $data['perusahaan_menunggu'] = count($perusahaan_menunggu);
            $perusahaan_diproses = pengajuan_perusahaan::where('status_pengecekan', 'menunggu')->get();
            $data['perusahaan_diproses'] = count($perusahaan_diproses);
            return view('admin.perusahaan.index', compact('diproses', 'disetujui', 'ditolak', 'today', 'data'));
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
        $dokumen = dokumen::all()->toArray();;
        $nibcek = perusahaan::all('nib');
        return view('pemohon.perusahaan.create', compact('kbli', 'nibcek', 'dokumen'));
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
        $docs = ['dokumen_nib', 'sertifikat_standar', 'surat_pernyataan', 'surat_permohonan', 'surat_izin_trayek', 'surat_izin_penyelenggara_trayek','surat_delivery_order', 'surat_izin_penyelenggara_muat' ];
        $convert = [];
        foreach ($docs as $key => $value) {
            $name = 'file_'.$value;
            $convert[$name] = $request->file($value) != null ?  $this->uploadFile($request, $value) : null;
        }
        if (!is_null($convert['file_surat_izin_penyelenggara_trayek'])) {$convert['file_surat_izin_penyelenggara'] = $convert['file_surat_izin_penyelenggara_trayek'];}
        if (!is_null($convert['file_surat_izin_penyelenggara_muat'])) {$convert['file_surat_izin_penyelenggara'] = $convert['file_surat_izin_penyelenggara_muat'];}
        else if (is_null($convert['file_surat_izin_penyelenggara_muat']) || is_null($convert['file_surat_izin_penyelenggara_trayek'])) {$convert['file_surat_izin_penyelenggara'] = null;}

        $perusahaan = perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_pimpinan' => $request->nama_pimpinan,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'nib' => $request->nib,
            'nomor_izin_trayek' => $request->nomor_izin_trayek,
            'tanggal_izin_trayek' => $request->tanggal_izin_trayek,
            'dokumen_nib' => $convert['file_dokumen_nib'],
            'tanggal_nib' => $request->tanggal_nib,
            'sertifikat_standar' =>  $convert['file_sertifikat_standar'],
            'surat_izin_trayek' => $convert['file_surat_izin_trayek'],
            'surat_izin_penyelenggara' => $convert['file_surat_izin_penyelenggara'],
            'surat_delivery_order' => $convert['file_surat_delivery_order'],
            'kbli_id' => $request->kbli_id,
            'user_id' => Auth::user()->id,
        ]);

        $antrian = null;

        if($perusahaan) {
            $pengajuan = pengajuan_perusahaan::create([
                'perusahaan_id' => $perusahaan->id,
                'surat_pernyataan' => $convert['file_surat_pernyataan'],
                'surat_permohonan' => $convert['file_surat_permohonan'],
                'nomor_permohonan'=> $request->nomor_permohonan,
                'tanggal_permohonan' => $today,
                'status_pengecekan' => 'menunggu'
            ]); 
            
            if($pengajuan){
                $antrian = antrian::create([
                    'perusahaan_id' => $perusahaan->id,
                    'tanggal_permohonan' => $today,
                    'jumlah_perusahaan' => 1,
                ]);
            }
        }

        if($antrian != null) {
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
        } elseif (Auth::user()->role == 'admin' || Auth::user()->role == 'pengawas') {
            return view('admin.perusahaan.detail', compact('data'));
        } elseif (Auth::user()->role == 'petugas') {
            return view('petugas.perusahaan.detail', compact('data'));
        } elseif (Auth::user()->role == 'customer-service') {
            return view('admin.perusahaan.detail', compact('data'));
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
                'status_pengecekan' => $request->status_pengecekan,
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
            $perusahaan = perusahaan::where('id',$id)->first();
            $status = pengajuan_perusahaan::where('perusahaan_id', $id )->first();
            $status->update($request->all());
            if($status->status_pengecekan == 'disetujui') {
                $status->status_penerbitan = 'menunggu';
                $count_perusahaan = pengajuan_perusahaan::where('status_pengecekan', 'disetujui' )->get();
                $urut = count($count_perusahaan);
                $tahun = Carbon::now()->format('Y');
                $status->nomor_keterangan_perusahaan = '551.21 / '. $urut.' / '.$status->petugas->kode.' / 113.4 / II / '.$tahun;
                $status->save();
                $data_angkutan = angkutan::where('perusahaan_id', $id)->select('id')->get()->toArray();
                $data_tertunda = pengajuan_angkutan::whereIn('angkutan_id', $data_angkutan)->where('status_penerbitan', 'tertunda')->get();
                if ($data_tertunda) {
                    foreach ($data_tertunda as $key => $value) {
                        $value->status_penerbitan = 'menunggu';
                        $value->save();
                    }
                }
            }

        } elseif (Auth::user()->role == 'pemohon') {

            $find = perusahaan::where('id',$id)->first();
            $find->update($request->all());

            $pengajuan = pengajuan_perusahaan::where('perusahaan_id', $id )->first();
            $pengajuan->update($request->all());

            if( $request->file('dokumen_nib')) { $find->dokumen_nib = $this->uploadFile($request, 'dokumen_nib'); } 
            if ($request->file('surat_pernyataan')) { $pengajuan->surat_pernyataan = $this->uploadFile($request, 'surat_pernyataan');} 
            if ($request->file('surat_permohonan')) { $pengajuan->surat_permohonan = $this->uploadFile($request, 'surat_permohonan');}
            if ($request->file('surat_izin_trayek')) {$find->surat_izin_trayek = $this->uploadFile($request, 'surat_izin_trayek');}
            if ($request->file('surat_delivery_order')) {$find->surat_delivery_order = $this->uploadFile($request, 'surat_delivery_order');}
            if ($request->file('surat_izin_penyelenggara')) {$find->surat_izin_penyelenggara = $this->uploadFile($request, 'surat_izin_penyelenggara');}
            if ($request->file('sertifikat_standar')) {$find->sertifikat_standar = $this->uploadFile($request, 'sertifikat_standar');}

            if($pengajuan->status_pengecekan == 'ditolak') {$pengajuan->status_pengecekan = 'menunggu'; $pengajuan->catatan = $pengajuan->catatan  .' <br/><i> telah diperbarui pada '.$today.'</i>';} 
            $find->save();
            $pengajuan->save();
            if ($pengajuan) {$status = true;}
            
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
        $detail = pengajuan_perusahaan::where('id', $id)->first();
        $view;
        if($detail->perusahaan->kbli->kategori == 'angkutan-penumpang-umum-dalam-trayek' || $detail->perusahaan->kbli->kategori == 'angkutan-penumpang-umum-tidak-dalam-trayek') {
            $view = 'petugas.perusahaan.pdf-view-penumpang';
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

    public function konfirmasiPencetakanSurat($id){
        $today = Carbon::today()->toDateString();
        $pengajuan = pengajuan_perusahaan::where('id', $id)->first();
        $pengajuan->status_penerbitan = 'dicetak';
        $pengajuan->tanggal_cetak = $today;
        $pengajuan->save();
        if($pengajuan) {
            return redirect()->route('perusahaan.index')->with(['success'=>'data berhasil diperbaharui']);
        } else {
            return redirect()->route('perusahaan.index')->with(['gagal'=>'data gagal diperbaharui']);
        }
    }

    public function konfirmasiBirokrasiSurat($id){
        $today = Carbon::today()->toDateString();
        $pengajuan = pengajuan_perusahaan::where('id', $id)->first();
        $pengajuan->status_penerbitan = 'birokrasi';
        $pengajuan->tanggal_birokrasi = $today;
        $pengajuan->save();

        if($pengajuan) {
            return redirect()->route('perusahaan.index')->with(['success'=>'data berhasil diperbaharui']);
        } else {
            return redirect()->route('perusahaan.index')->with(['gagal'=>'data gagal diperbaharui']);
        }
    }

    public function konfirmasiPenerbitanSurat($id){
        $today = Carbon::today()->toDateString();
        $pengajuan = pengajuan_perusahaan::where('id', $id)->first();
        $pengajuan->status_penerbitan = 'diterbitkan';
        $pengajuan->tanggal_penerbitan = $today;
        $pengajuan->save();
        $notif = $this->SendMail($pengajuan->perusahaan_id);
        if($notif) {
            return redirect()->route('perusahaan.index')->with(['success'=>'data berhasil diperbaharui']);
        } else {
            return redirect()->route('perusahaan.index')->with(['gagal'=>'data gagal diperbaharui']);
        }
    }

    public function konfirmasiPengambilanSurat($id){
        $today = Carbon::today()->toDateString();
        $pengajuan = pengajuan_perusahaan::where('id', $id)->first();
        $pengajuan->status_penerbitan = 'diambil';
        $pengajuan->tanggal_pengambilan = $today;
        $pengajuan->save();
        if($pengajuan) {
            return redirect()->back()->with(['success'=>'data berhasil diperbaharui']);
        } else {
            return redirect()->back()->with(['gagal'=>'data gagal diperbaharui']);
        }
    }

    public function upload() {
        $kbli = kbli::all();
        $nibcek = perusahaan::all('nib');
        return view('pemohon.perusahaan.upload', compact('kbli', 'nibcek'));
    }

    public function storeUpload(Request $request) 
    {

        $today = Carbon::now('Asia/Jakarta')->toDateString();
        $docs = ['dokumen_nib', 'sertifikat_standar', 'surat_izin_trayek', 'surat_izin_penyelenggara_trayek','surat_delivery_order', 'surat_izin_penyelenggara_muat' , 'surat_keterangan_perusahaan'];
        $convert = [];
        foreach ($docs as $key => $value) {
            $name = 'file_'.$value;
            $convert[$name] = $request->file($value) != null ?  $this->uploadFile($request, $value) : null;
        }
        if (!is_null($convert['file_surat_izin_penyelenggara_trayek'])) {$convert['file_surat_izin_penyelenggara'] = $convert['file_surat_izin_penyelenggara_trayek'];}
        else if (!is_null($convert['file_surat_izin_penyelenggara_muat'])) {$convert['file_surat_izin_penyelenggara'] = $convert['file_surat_izin_penyelenggara_muat'];}
        else if (is_null($convert['file_surat_izin_penyelenggara_muat']) || is_null($convert['file_surat_izin_penyelenggara_trayek'])) {$convert['file_surat_izin_penyelenggara'] = null;}

        $perusahaan = perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_pimpinan' => $request->nama_pimpinan,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'nib' => $request->nib,
            'nomor_izin_trayek' => $request->nomor_izin_trayek,
            'tanggal_izin_trayek' => $request->tanggal_izin_trayek,
            'dokumen_nib' => $convert['file_dokumen_nib'],
            'tanggal_nib' => $request->tanggal_nib,
            'sertifikat_standar' =>  $convert['file_sertifikat_standar'],
            'surat_izin_trayek' => $convert['file_surat_izin_trayek'],
            'surat_izin_penyelenggara' => $convert['file_surat_izin_penyelenggara'],
            'surat_delivery_order' => $convert['file_surat_delivery_order'],
            'surat_keterangan_perusahaan' => $convert['file_surat_keterangan_perusahaan'],
            'kbli_id' => $request->kbli_id,
            'user_id' => Auth::user()->id,
        ]);
        $pengajuan = pengajuan_perusahaan::create([
            'perusahaan_id' => $perusahaan->id, 
            'surat_pernyataan' => 'offline',
            'surat_permohonan' => 'offline',
            'status_pengecekan' => 'disetujui', 
            'surat_keterangan_perusahaan' => $convert['file_surat_keterangan_perusahaan'],
            'status_penerbitan' => 'offline', 
        ]);


        if($pengajuan) {
            return redirect()->route('perusahaan.index')->with(['success'=>'data berhasil ditambahkan']);
        } else {
            return redirect()->route('perusahaan.index')->with(['gagal'=>'data gagal ditambahkan']);
        }
    }

    public function SendMail($id) {
        $data = perusahaan::where('id', $id)->first();
        $mail = $data->user->email;
        //dd($mail);
        $send =  Mail::to($mail)->send(new NotifPerusahaan($data));
        if($send) {
            return redirect()->back()->with(['success'=>'Nontifikasi berhasil dikirim']);
        } else {
            return redirect()->back()->with(['gagal'=>'Nontifikasi gagal dikirm']);
        }
    }
}
