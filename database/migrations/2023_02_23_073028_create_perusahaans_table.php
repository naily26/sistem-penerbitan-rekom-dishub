<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('nama_pimpinan');
            $table->string('nomor_telepon');
            $table->text('alamat');
            $table->string('nib');
            $table->string('dokumen_nib');
            $table->date('tanggal_nib');
            $table->string('sertifikat_standar')->nullable();
            $table->string('surat_izin_trayek')->nullable();
            $table->string('surat_delivery_order')->nullable();
            $table->foreignId('kbli_id');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('perusahaans');
    }
}
