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
        Schema::create('data_tampilans', function (Blueprint $table) {
            $table->id();
            $table->string('dasar_hukum');
            $table->text('isi_dasar_hukum');
            $table->string('foto_persyaratan');
            $table->text('persyaratan');
            $table->text('video');
            $table->string('dokumen_pedoman');
            $table->text('deskripsi_lembaga');
            $table->text('alamat_lembaga');
            $table->string('telepon_lembaga');
            $table->string('email_lembaga');
            $table->string('foto_lembaga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tampilans');
    }
};
