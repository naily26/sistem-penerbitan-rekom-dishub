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
        Schema::create('data_mutasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_angkutan_id')
                    ->constrained('pengajuan_angkutans')
                    ->onUpdate('cascade');
            $table->string('perusahaan_lama');
            $table->string('alamat_lama');
            $table->string('warna_tnkb_lama');
            $table->string('surat_fiskal');
            $table->string('nomor_surat_fiskal');
            $table->string('tanggal_surat_fiskal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_mutasis');
    }
};
