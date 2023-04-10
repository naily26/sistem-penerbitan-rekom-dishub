<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrian extends Model
{
    use HasFactory;

    protected $table = 'antrians';

    protected $fillable = [
        'perusahaan_id',
        'petugas_id',
        'tanggal_permohonan',
        'jumlah_perusahaan',
        'jumlah_angkutan'
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
