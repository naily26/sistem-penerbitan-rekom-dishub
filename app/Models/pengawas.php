<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengawas extends Model
{
    use HasFactory;

    protected $table = 'pengawas';

    protected $fillable = [
        'nama',
        'jabatan',
        'lembaga',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
