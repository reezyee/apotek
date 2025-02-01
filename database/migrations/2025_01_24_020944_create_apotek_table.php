<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Tabel Apotek Mitra
        Schema::create('apotek', function (Blueprint $table) {
            $table->id();
            $table->string('nama_apotek');
            $table->string('nomor_izin_apotek');
            $table->text('alamat_apotek');
            $table->string('lokasi_apotek');
            $table->string('nama_apoteker');
            $table->string('sipa');
            $table->string('jadwal_praktik');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apotek');
    }
};
