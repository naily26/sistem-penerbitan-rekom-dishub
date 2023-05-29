<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class angkutan extends Model
{
    use HasFactory;

    protected $table = 'angkutans';

    protected $fillable = [
        'perusahaan_id',
        'user_id',
        'nomor_uji',
        'merk',
        'tipe',
        'tahun_pembuatan',
        'jenis',
        'nomor_rangka',
        'nomor_mesin',
        'nama_pemilik',
        'nomor_kendaraan',
        'nomor_faktur',
        'tanggal_faktur',
        'stnkb',
        'warna_tnkb',
        'buku_uji_berkala',
        'surat_faktur_intern',
        'surat_registrasi_uji_tipe',
        'nomor_srut',
        'tanggal_srut',
        'kps'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pengajuan_angkutan()
    {
        return $this->belongsTo(pengajuan_angkutan::class, 'id', 'angkutan_id');
    }

    public function perusahaan()
    {
        return $this->belongsTo(perusahaan::class, 'perusahaan_id', 'id');
    }
    
}
