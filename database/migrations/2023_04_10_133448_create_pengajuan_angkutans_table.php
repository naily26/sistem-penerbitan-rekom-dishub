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
        Schema::create('pengajuan_angkutans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('angkutan_id')
                    ->constrained('angkutans')
                    ->onUpdate('cascade');
            $table->enum('keterangan', ['kendaraan-baru', 'kendaraan-mutasi', 'perpanjangan-stnk']);
            $table->string('nomor_kendaraan');
            $table->string('nomor_uji');
            $table->string('nomor_kendaraan');
            $table->string('nomor_faktur');
            $table->date('tanggal_faktur');
            $table->string('stnkb')->nullable();
            $table->string('warna_tnkb')->nullable();
            $table->string('buku_uji_berkala');
            $table->string('surat_faktur_intern')->nullable();
            $table->string('surat_registrasi_uji_tipe')->nullable();
            $table->string('nomor_srut')->nullable();
            $table->date('tanggal_srut')->nullable();
            $table->string('surat_permohonan');
            $table->string('surat_pernyataan');
            $table->string('nomor_permohonan')->nullable();
            $table->enum('status_pengecekan_1', ['disetujui', 'ditolak', 'menunggu'])->default('menunggu');
            $table->enum('status_pengecekan_2', ['disetujui', 'ditolak', 'menunggu', 'tertunda'])->default('menunggu');
            $table->string('surat_rekomendasi_peruntukan')->nullable();
            $table->string('nomort_rekomendasi_peruntukan')->nullable();
            $table->enum('status_penerbitan', ['menunggu', 'dicetak', 'birokrasi', 'diterbitkan'])->nullable();
            $table->date('tanggal_permohonan')->nullable();
            $table->date('tanggal_cetak')->nullable();
            $table->date('tanggal_penerbitan')->nullable();
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
        Schema::dropIfExists('pengajuan_angkutans');
    }
};
