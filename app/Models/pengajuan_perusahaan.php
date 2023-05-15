<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan_perusahaan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_perusahaans';

    protected $fillable = [
        'perusahaan_id', 
        'surat_pernyataan',
        'surat_permohonan',
        'nomor_permohonan',
        'status_pengecekan', 
        'surat_keterangan_perusahaan',
        'nomor_keterangan_perusahaan',
        'status_penerbitan', 
        'tanggal_permohonan',
        'tanggal_cetak',
        'tanggal_birokrasi',
        'tanggal_penerbitan',
        'tanggal_pengambilan',
        'petugas_id',
        'catatan',
    ];

    public function perusahaan()
    {
        return $this->belongsTo(perusahaan::class, 'perusahaan_id', 'id');
    }

    public function petugas()
    {
        return $this->belongsTo(petugas::class, 'petugas_id', 'id');
    }
}
