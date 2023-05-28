<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaans';

    protected $fillable = [
        'nama_perusahaan',
        'nama_pimpinan',
        'nomor_telepon',
        'alamat',
        'nib',
        'dokumen_nib',
        'tanggal_nib',
        'sertifikat_standar',
        'surat_izin_trayek',
        'surat_izin_penyelenggara',
        'surat_delivery_order',
        'kbli_id',
        'user_id',
        'tanggal_izin_trayek',
        'nomor_izin_trayek',
        'surat_keterangan_perusahaan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kbli()
    {
        return $this->belongsTo(kbli::class, 'kbli_id', 'id');
    }

    public function petugas()
    {
        return $this->belongsTo(petugas::class, 'petugas_id', 'id');
    }

    public function pengajuan_perusahaan()
    {
        return $this->belongsTo(pengajuan_perusahaan::class, 'id', 'perusahaan_id');
    }
}
