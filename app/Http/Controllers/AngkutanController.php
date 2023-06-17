<?php

namespace App\Http\Controllers;

use App\Models\angkutan;
use App\Models\antrian;
use App\Models\data_mutasi;
use App\Models\pengajuan_angkutan;
use App\Models\perusahaan;
use App\Models\kbli;
use App\Models\petugas;
use App\Models\kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifAngkutan;

use  PDF;
use Carbon\Carbon;

class AngkutanController extends Controller
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
            $angkutan = angkutan::where('user_id', Auth::user()->id)->get();
            return view('pemohon.angkutan.index', compact('angkutan'));
        } elseif (Auth::user()->role == 'petugas') {
            $data_petugas = petugas::where('user_id', Auth::user()->id)->first();
            $angkutan_menunggu = pengajuan_angkutan::where('status_pengecekan', 'disetujui')->where('status_penerbitan', 'menunggu')->where('petugas_id', $data_petugas->id)->get();
            $data['angkutan_menunggu'] = count($angkutan_menunggu);
            $angkutan_diproses = pengajuan_angkutan::where('status_pengecekan', 'menunggu')->where('petugas_id', $data_petugas->id)->get();
            $data['angkutan_diproses'] = count($angkutan_diproses);
            $disetujui = pengajuan_angkutan::where('petugas_id', $data_petugas->id)->where('status_pengecekan', 'disetujui')->where('status_penerbitan', '!=', 'tertunda')->get();
            $ditolak = pengajuan_angkutan::where('petugas_id', $data_petugas->id)->where('status_pengecekan', 'ditolak')->get();
            $diproses = pengajuan_angkutan::where('petugas_id', $data_petugas->id)->where('status_pengecekan', 'menunggu')->get();
            $tertunda = pengajuan_angkutan::where('petugas_id', $data_petugas->id)->where('status_penerbitan', 'tertunda')->get();
            return view('petugas.angkutan.index', compact('disetujui', 'ditolak', 'diproses', 'tertunda', 'data'));
        } elseif (Auth::user()->role == 'pengawas') {
            $disetujui = pengajuan_angkutan::where('status_pengecekan', 'disetujui')->where('status_penerbitan', '!=', 'tertunda')->get();
            return view('pengawas.angkutan.index', compact('disetujui'));
        } elseif (Auth::user()->role == 'admin') {
            $disetujui = pengajuan_angkutan::where('status_pengecekan', 'disetujui')->where('status_penerbitan', '!=', 'tertunda')->get();
            $ditolak = pengajuan_angkutan::where('status_pengecekan', 'ditolak')->get();
            $diproses = pengajuan_angkutan::where('status_pengecekan', 'menunggu')->get();
            $tertunda = pengajuan_angkutan::where('status_penerbitan', 'tertunda')->get();
            $angkutan_menunggu = pengajuan_angkutan::where('status_pengecekan', 'disetujui')->whereIn('status_penerbitan', ['dicetak'. 'birokrasi'])->get();
            $data['angkutan_menunggu'] = count($angkutan_menunggu);
            $angkutan_diproses = pengajuan_angkutan::where('status_pengecekan', 'menunggu')->get();
            $data['angkutan_diproses'] = count($angkutan_diproses);
            return view('admin.angkutan.index', compact('disetujui', 'ditolak', 'diproses', 'tertunda', 'data'));
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
        $kota = kota::all();
        $kbli_khusus = kbli::where('kategori', 'angkutan-barang-khusus')->get();
        $khusus = [];
        foreach ($kbli_khusus as $key => $value) {
            $khusus[$key] = $value->id;
        }
        $perusahaan = perusahaan::where('user_id', Auth::user()->id)->get();
        return view('pemohon.angkutan.create', compact('kbli', 'perusahaan', 'kota', 'khusus'));
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
        $file = ['stnkb', 'buku_uji_berkala', 'surat_faktur_intern', 'surat_registrasi_uji_tipe', 'surat_permohonan', 'surat_pernyataan', 'surat_kuasa', 'surat_fiskal', 'foto_depan', 'foto_belakang', 'foto_kanan', 'foto_kiri', 'kps'];
        foreach ($file as $key => $value) {
            $name = 'file_' . $value;
            $convert[$name] = $request->file($value) != null ?  $this->uploadFile($request, $value) : null;
        }

        if ($request->keterangan != 'kendaraan-baru') {
            $request->nomor_faktur = null;
            $request->tanggal_faktur = null;
            $request->tanggal_srut = null;
            $request->nomor_srut = null;
        } elseif ($request->keterangan == 'kendaraan-baru') {
            $request->nomor_uji = 'baru';
            $request->nomor_kendaraan = 'baru';
        }

        $angkutan = angkutan::create([
            $request->all(),
            'perusahaan_id' => $request->perusahaan_id,
            'user_id' => Auth::user()->id,
            'nomor_uji' => $request->nomor_uji,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'tahun_pembuatan' => $request->tahun_pembuatan,
            'jenis' => $request->jenis,
            'nomor_rangka' => $request->nomor_rangka,
            'nomor_mesin' => $request->nomor_mesin,
            'nama_pemilik' => $request->nama_pemilik,
            'nomor_kendaraan' => $request->nomor_kendaraan,
            'nomor_faktur' => $request->nomor_faktur,
            'tanggal_faktur' => $request->tanggal_faktur,
            'tanggal_srut' => $request->tanggal_srut,
            'warna_tnkb' => 'Warna Dasar Plat Kuning Dengan Tulisan Hitam',
            'stnkb' => $convert['file_stnkb'],
            'buku_uji_berkala' => $convert['file_buku_uji_berkala'],
            'surat_faktur_intern' => $convert['file_surat_faktur_intern'],
            'surat_registrasi_uji_tipe' => $convert['file_surat_registrasi_uji_tipe'],
            'nomor_srut' => $request->nomor_srut,
            'kps' => $convert['file_kps']
        ]);

        $petugas = $this->cekAntrian($angkutan->perusahaan_id);
        $pengajuan = pengajuan_angkutan::create([
            'angkutan_id' => $angkutan->id,
            'keterangan' => $request->keterangan,
            'surat_permohonan' => $convert['file_surat_permohonan'],
            'surat_pernyataan' => $convert['file_surat_pernyataan'],
            'status_pengecekan' => 'menunggu',
            'tanggal_permohonan' => $today,
            'petugas_id' => $petugas,
            'surat_kuasa' => $convert['file_surat_kuasa'],
            'foto_depan' => $convert['file_foto_depan'],
            'foto_belakang' => $convert['file_foto_belakang'],
            'foto_kanan' => $convert['file_foto_kanan'],
            'foto_kiri' => $convert['file_foto_kiri'],
            'tembusan' => $request->kota,
            'nomor_permohonan' => $request->nomor_permohonan
        ]);

        if ($pengajuan->keterangan == "kendaraan-mutasi") {
            $data_mutasi = data_mutasi::create([
                'pengajuan_angkutan_id' => $pengajuan->id,
                'perusahaan_lama' => $request->perusahaan_lama,
                'alamat_lama' => $request->alamat_lama,
                'warna_tnkb_lama' => $request->warna_tnkb_lama,
                'surat_fiskal' =>  $convert['file_surat_fiskal'],
                'nomor_surat_fiskal' => $request->nomor_surat_fiskal,
                'tanggal_surat_fiskal' => $request->tanggal_surat_fiskal,
                'kota_asal' => $request->kota_asal,
            ]);

            if ($data_mutasi) {
                return redirect()->route('angkutan.index')->with(['success' => 'data berhasil diperbarui']);
            } else {
                return redirect()->route('angkutan.index')->with(['gagal' => 'data gagal diperbarui']);
            }
        } else {
            if ($pengajuan) {
                return redirect()->route('angkutan.index')->with(['success' => 'data berhasil diperbarui']);
            } else {
                return redirect()->route('angkutan.index')->with(['gagal' => 'data gagal diperbarui']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengajuan = pengajuan_angkutan::where('id', $id)->first();
        if (Auth::user()->role == 'pemohon') {
            return view('pemohon.angkutan.detail', compact('pengajuan'));
        } else {
            return view('admin.angkutan.detail', compact('pengajuan'));
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
        $kota = kota::all();
        $pengajuan = pengajuan_angkutan::where('id', $id)->first();
        if (Auth::user()->role == 'petugas') {
            return view('petugas.angkutan.edit', compact('pengajuan'));
        } elseif (Auth::user()->role == 'pemohon') {

            return view('pemohon.angkutan.edit',  compact('pengajuan', 'kota'));
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
    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 'petugas') {
            $status = pengajuan_angkutan::where('id', $id)->first();
            $status->update($request->all());
            if ($status->status_pengecekan == 'disetujui') {
                if ($status->angkutan->perusahaan->pengajuan_perusahaan->status_pengecekan == 'disetujui') {
                    $status->status_penerbitan = 'menunggu';
                } else {
                    $status->status_penerbitan = 'tertunda';
                }

                $count_angkutan = pengajuan_angkutan::where('status_pengecekan', 'disetujui')->get();
                $urut = count($count_angkutan);
                $tahun = Carbon::now()->format('Y');
                $status->nomor_rekomendasi_peruntukan = '551.21 / ' . $urut . ' / ' . $status->petugas->kode . ' / 113.4 / II / ' . $tahun;
                $status->save();
            }
        } elseif (Auth::user()->role == 'pemohon') {

            $file_pengajuan = [ 'surat_permohonan', 'surat_pernyataan', 'surat_kuasa', 'foto_depan', 'foto_belakang', 'foto_kanan', 'foto_kiri'];
            $file_angkutan = ['stnkb', 'buku_uji_berkala', 'surat_faktur_intern', 'surat_registrasi_uji_tipe',  'kps'];
            //pengajuan
            $pengajuan = pengajuan_angkutan::where('id', $id)->first();
            $pengajuan->update($request->all());
            foreach ($file_pengajuan as $key => $item) {
                if( $request->file($item)) { $pengajuan->$item = $this->uploadFile($request, $item); } 
            }
            $pengajuan->save();
            //angkutan
            $angkutan = angkutan::where('id', $pengajuan->angkutan_id)->first();
            $angkutan->update($request->all());
            foreach ($file_angkutan as $key => $value) {
                if( $request->file($value)) { $angkutan->$value = $this->uploadFile($request, $value);} 
                
            }
            $angkutan->save();
            //mutasi
            if ($pengajuan->keterangan == "kendaraan-mutasi") {
                $data_mutasi = data_mutasi::where('pengajuan_angkutan_id', $id)->first();
                $data_mutasi->update($request->all());
                if( $request->file('surat_fiskal')) { $data_mutasi->surat_fiskal = $this->uploadFile($request, 'surat_fiskal'); } 
                $data_mutasi->save();
                if($data_mutasi) {
                    $status = true;
                }
            } elseif ($angkutan) {
                $status = true;
            }
        }

        if ($status) {
            return redirect()->route('angkutan.index')->with(['success' => 'data berhasil diperbarui']);
        } else {
            return redirect()->route('angkutan.index')->with(['gagal' => 'data gagal diperbarui']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\angkutan  $angkutan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = pengajuan_angkutan::where('id', $id)->first();
        $angkutan = angkutan::where('id', $pengajuan->angkutan_id)->first();
        $pengajuan->delete();
        $angkutan->delete();

        if ($angkutan) {
            return redirect()->route('angkutan.index')->with(['success' => 'permohonan berhasil dihapus dan dibatalkan']);
        } else {
            return redirect()->route('angkutan.index')->with(['gagal' => 'permohonan gagal dihapus dan dibatalkan']);
        }
    }

    public function cekAntrian($id)
    {
        $today = Carbon::today()->toDateString();
        $cek = antrian::where('perusahaan_id', $id)->where('tanggal_permohonan', $today)->first();
        $ret = null;

        if ($cek == null) {
            antrian::create([
                'perusahaan_id' => $id,
                'tanggal_permohonan' => $today,
                'jumlah_perusahaan' => 0,
                'jumlah_angkutan' => 1,
            ]);
        } else {
            $cek->jumlah_angkutan = +1;
            $cek->save();
            $ret = $cek->petugas_id;
        }
        return $ret;
    }

    public function uploadFile(Request $request, $oke)
    {
        $result = '';
        $file = $request->file($oke);
        $name = $file->getClientOriginalName();
        $extension = explode('.', $name);
        $extension = strtolower(end($extension));
        $key = rand() . '-' . $oke;
        $tmp_file_name = "{$key}.{$extension}";
        $tmp_file_path = "admin/" . $oke . "/";
        $file->move($tmp_file_path, $tmp_file_name);
        $result = url('/') . '/' . 'admin/' . $oke . '' . '/' . $tmp_file_name;
        return $result;
    }

    public function cetak_surat($id)
    {
        $today = Carbon::today()->toDateString();
        $detail = pengajuan_angkutan::where('id', $id)->first();
        $view;
        if (str_contains($detail->angkutan->perusahaan->kbli->kategori, 'angkutan-penumpang')) {
            if ($detail->keterangan == 'perpanjangan-stnk') {
                $view = 'petugas.angkutan.pdf-view-penumpang-perpanjangan';
            } elseif ($detail->keterangan == 'kendaraan-baru') {
                $view = 'petugas.angkutan.pdf-view-penumpang-baru';
            } elseif ($detail->keterangan == 'kendaraan-mutasi') {
                $view = 'petugas.angkutan.pdf-view-penumpang-baru';
            }
        } elseif (str_contains($detail->angkutan->perusahaan->kbli->kategori, 'angkutan-barang')) {
            if ($detail->keterangan == 'perpanjangan-stnk') {
                $view = 'petugas.angkutan.pdf-view-barang-perpanjangan';
            } elseif ($detail->keterangan == 'kendaraan-baru') {
                $view = 'petugas.angkutan.pdf-view-barang-baru';
            } elseif ($detail->keterangan == 'kendaraan-mutasi') {
                $view = 'petugas.angkutan.pdf-view-barang-baru';
            }
        }
        $data = PDF::loadview($view, compact('detail', 'today'));
        return $data->stream('laporan.pdf');
    }

    public function konfirmasiPencetakanSuratAngkutan($id)
    {
        $today = Carbon::today()->toDateString();
        $pengajuan = pengajuan_angkutan::where('id', $id)->first();
        $pengajuan->status_penerbitan = 'dicetak';
        $pengajuan->tanggal_cetak = $today;
        $pengajuan->save();
        if ($pengajuan) {
            return redirect()->route('angkutan.index')->with(['success' => 'data berhasil diperbarui']);
        } else {
            return redirect()->route('angkutan.index')->with(['gagal' => 'data gagal diperbarui']);
        }
    }

    public function konfirmasiBirokrasiSuratAngkutan($id)
    {
        $today = Carbon::today()->toDateString();
        $pengajuan = pengajuan_angkutan::where('id', $id)->first();
        $pengajuan->status_penerbitan = 'birokrasi';
        $pengajuan->tanggal_birokrasi = $today;
        $pengajuan->save();
        if ($pengajuan) {
            return redirect()->route('angkutan.index')->with(['success' => 'data berhasil diperbarui']);
        } else {
            return redirect()->route('angkutan.index')->with(['gagal' => 'data gagal diperbarui']);
        }
    }

    public function konfirmasiPenerbitanSuratAngkutan($id)
    {
        $today = Carbon::today()->toDateString();
        $pengajuan = pengajuan_angkutan::where('id', $id)->first();
        $pengajuan->status_penerbitan = 'diterbitkan';
        $pengajuan->tanggal_penerbitan = $today;
        $pengajuan->save();
        $notif = $this->SendMail($pengajuan->angkutan_id);
        if ($notif) {
            return redirect()->route('angkutan.index')->with(['success' => 'data berhasil diperbarui']);
        } else {
            return redirect()->route('angkutan.index')->with(['gagal' => 'data gagal diperbarui']);
        }
    }

    public function konfirmasiPengambilanSuratAngkutan($id)
    {
        $today = Carbon::today()->toDateString();
        $pengajuan = pengajuan_angkutan::where('id', $id)->first();
        $pengajuan->status_penerbitan = 'diambil';
        $pengajuan->tanggal_pengambilan = $today;
        $pengajuan->save();
        if ($pengajuan) {
            return redirect()->back()->with(['success' => 'data berhasil diperbarui']);
        } else {
            return redirect()->back()->with(['gagal' => 'data gagal diperbarui']);
        }
    }

    public function getAngkutan()
    {
        $angkutan = angkutan::where('user_id', Auth::user()->id)->get();
        return response()->json($angkutan);
    }

    public function SendMail($id) {
        $data = angkutan::where('id', $id)->first();
        $mail = $data->user->email;
        //dd($mail);
        $send =  Mail::to($mail)->send(new NotifAngkutan($data));
        if($send) {
            return redirect()->back()->with(['success'=>'Nontifikasi berhasil dikirim']);
        } else {
            return redirect()->back()->with(['gagal'=>'Nontifikasi gagal dikirm']);
        }
    }
}
