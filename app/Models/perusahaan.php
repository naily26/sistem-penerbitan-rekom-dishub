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
        'surat_delivery_order',
        'surat_pernyataan',
        'surat_permohonan',
        'nomor_permohonan',
       'status_pengecekan_1',
       'status_pengecekan_2',
        'surat_keterangan_perusahaan',
        'nomort_keterangan_perusahaan',
       'status_penerbitan', 
        'tanggal_permohonan',
        'tanggal_cetak',
        'tanggal_penerbitan',
        'kbli_id',
        'user_id',
        'petugas_id',
        'catatan'
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
}
