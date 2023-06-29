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
        Schema::create('pengajuan_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perusahaan_id')
                    ->constrained('perusahaans')
                    ->onUpdate('cascade');
            $table->string('surat_pernyataan');
            $table->string('surat_permohonan');
            $table->string('nomor_permohonan')->nullable();
            $table->enum('status_pengecekan', ['disetujui', 'ditolak', 'menunggu'])->default('menunggu');
            $table->string('surat_keterangan_perusahaan')->nullable();
            $table->string('nomor_keterangan_perusahaan')->nullable();
            $table->enum('status_penerbitan', ['menunggu', 'dicetak', 'birokrasi', 'diterbitkan', 'diambil', 'offline'])->nullable();
            $table->date('tanggal_permohonan')->nullable();
            $table->date('tanggal_cetak')->nullable();
            $table->date('tanggal_birokrasi')->nullable();
            $table->date('tanggal_penerbitan')->nullable();
            $table->date('tanggal_pengambilan')->nullable();
            $table->foreignId('petugas_id')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_perusahaans');
    }
};
