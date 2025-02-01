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
            Schema::create('obat', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('pembuat');
                $table->string('nie');
                $table->foreignId('kategori_id')->nullable()->constrained('kategori')->onDelete('set null');
                $table->foreignId('jenisObat_id')->nullable()->constrained('jenis_obat')->onDelete('set null');
                $table->foreignId('bentukObat_id')->nullable()->constrained('bentuk_obat')->onDelete('set null');
                $table->text('deskripsi_obat');
                $table->text('indikasi_obat');
                $table->text('kontraindikasi_obat');
                $table->text('aturan_pakai');
                $table->text('efek_samping');
                $table->string('dosis_obat');
                $table->string('kekuatan_obat');
                $table->string('komposisi_obat');
                $table->integer('banyak');
                $table->integer('sisa');
                $table->integer('harga');
                $table->string('foto');
                $table->date('tanggal_kedaluwarsa');
                $table->boolean('is_available')->default(true);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat');
    }
};
