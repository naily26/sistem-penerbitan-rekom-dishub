<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pengajuan_angkutans', function (Blueprint $table) {
            $table->string('foto_depan');
            $table->string('foto_belakang');
            $table->string('foto_kanan');
            $table->string('foto_kiri');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengajuan_angkutans', function (Blueprint $table) {
            //
        });
    }
};
