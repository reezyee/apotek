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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('pemesanan_id'); // Relasi ke tabel pemesanan_obat
            $table->unsignedBigInteger('kasir_id')->nullable(); // Relasi ke tabel users (kasir)
            $table->string('kode_transaksi')->unique(); // Kode unik transaksi
            $table->decimal('total_harga', 15, 2); // Total harga
            $table->enum('metode_pembayaran', ['cash', 'credit_card', 'debit_card', 'e-wallet'])->default('cash'); // Metode pembayaran
            $table->enum('status_pembayaran', ['pending', 'paid', 'failed'])->default('pending'); // Status pembayaran
            $table->text('catatan')->nullable(); // Catatan tambahan
            $table->timestamps(); // created_at dan updated_at

            // Foreign keys
            $table->foreign('pemesanan_id')->references('id')->on('pemesanan')->onDelete('cascade');
            $table->foreign('kasir_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
