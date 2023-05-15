<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngkutansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angkutans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perusahaan_id')
                    ->constrained('perusahaans')
                    ->onUpdate('cascade');
            $table->foreignId('user_id');
            $table->string('nomor_uji');
            $table->string('merk');
            $table->string('tipe');
            $table->integer('tahun_pembuatan');
            $table->string('jenis');
            $table->string('nomor_rangka');
            $table->string('nomor_mesin');
            $table->string('nama_pemilik');
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('angkutans');
    }
}
