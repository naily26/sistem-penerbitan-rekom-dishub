<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_tampilan extends Model
{
    use HasFactory;
    protected $table = 'data_tampilans';

    protected $fillable = [
        'dasar_hukum',
        'isi_dasar_hukum',
        'foto_persyaratan',
        'persyaratan',
        'video',
        'dokumen_pedoman',
        'deskripsi_lembaga',
        'alamat_lembaga',
        'telepon_lembaga',
        'email_lembaga',
        'foto_lembaga',
    ];
}
