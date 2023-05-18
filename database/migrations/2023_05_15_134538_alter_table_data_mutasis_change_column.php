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
        Schema::table('data_mutasis', function (Blueprint $table) {
            $table->string('surat_fiskal')->nullable()->change();
            $table->string('nomor_surat_fiskal')->nullable()->change();
            $table->string('tanggal_surat_fiskal')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_mutasis', function (Blueprint $table) {
            //
        });
    }
};
