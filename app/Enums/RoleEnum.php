<?php
  
namespace App\Enums;
 
enum RoleEnum:string {
    case pemohon = 'pemohon';
    case pengawas = 'pengawas';
    case petugas = 'petugas';
    case admin = 'admin';
}