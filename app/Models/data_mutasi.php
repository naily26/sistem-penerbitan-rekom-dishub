<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_mutasi extends Model
{
    use HasFactory;
    protected $table = 'data_mutasis';

    protected $fillable = [
       'pengajuan_angkutan_id',
       'perusahaan_lama',
       'alamat_lama',
       'warna_tnkb_lama',
       'surat_fiskal',
       'nomor_surat_fiskal',
       'tanggal_surat_fiskal',
       'kota_asal',
       'pemilik_lama'
    ];

    public function pengajuan_angkutan()
    {
        return $this->belongsTo(pengajuan_angkutan::class, 'pengajuan_angkutan_id', 'id');
    }
}
