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
           $table->string('kota_asal');
        });

        Schema::table('pengajuan_angkutans', function (Blueprint $table) {
            $table->string('tembusan');
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
