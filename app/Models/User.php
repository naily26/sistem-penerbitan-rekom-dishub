<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Enums\RoleEnum;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'role' => RoleEnum::class
    ];

    public function isAdmin()
    {
        if($this->role == 'admin')
        { 
            return true; 
        } 
        else 
        { 
            return false; 
        }
    }

    public function isPetugas()
    {
        if($this->role == 'petugas')
        { 
            return true; 
        } 
        else 
        { 
            return false; 
        }
    }

    public function isPengawas()
    {
        if($this->role == 'pengawas')
        { 
            return true; 
        } 
        else 
        { 
            return false; 
        }
    }

    public function isPemohon()
    {
        if($this->role == 'pemohon')
        { 
            return true; 
        } 
        else 
        { 
            return false; 
        }
    }

    public function hasRole($role) {
        switch ($role) {
            case 'admin': return \Auth::user()->isAdmin();
            case 'pemohon': return \Auth::user()->isPemohon();
            case 'pengawas': return \Auth::user()->isPengawas();
            case 'petugas': return \Auth::user()->isPetugas();
        }
        return false;
    }
}
