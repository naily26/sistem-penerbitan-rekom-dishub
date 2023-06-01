<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan_angkutan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_angkutans';

    protected $fillable = [
        'angkutan_id',
        'keterangan',
        'surat_permohonan',
        'surat_pernyataan',
        'nomor_permohonan',
        'status_pengecekan',
        'surat_rekomendasi_peruntukan',
        'nomor_rekomendasi_peruntukan',
        'status_penerbitan',
        'tanggal_permohonan',
        'tanggal_cetak',
        'tanggal_birokrasi',
        'tanggal_penerbitan',
        'tanggal_pengambilan',
        'petugas_id',
        'catatan',
        'surat_kuasa',
        'foto_depan',
        'foto_belakang',
        'foto_kanan',
        'foto_kiri',
        'tembusan'
    ];

    public function angkutan()
    {
        return $this->belongsTo(angkutan::class, 'angkutan_id', 'id');
    }

    public function petugas()
    {
        return $this->belongsTo(petugas::class, 'petugas_id', 'id');
    }
    public function data_mutasi()
    {
        return $this->belongsTo(data_mutasi::class, 'id', 'pengajuan_angkutan_id');
    }
   
}
