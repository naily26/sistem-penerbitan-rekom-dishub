<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kbli extends Model
{
    use HasFactory;
    protected $table = 'kblis';

    protected $fillable = [
        'kode',
        'keterangan',
        'kategori',
        'uraian'
    ];

    
}
