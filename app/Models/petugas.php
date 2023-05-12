<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class petugas extends Model
{
    use HasFactory;
    protected $table = 'petugas';

    protected $fillable = [
        'kode',
        'nama',
        'jabatan',
        'no_hp',
        'user_id',
        'photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
