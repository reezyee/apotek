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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('user_id'); // Relasi ke tabel users (pelanggan)
            $table->unsignedBigInteger('kasir_id')->nullable(); // Relasi ke kasir (nullable)
            $table->string('kode_pemesanan')->unique(); // Kode unik pemesanan
            $table->date('tanggal_pemesanan'); // Tanggal pemesanan
            $table->enum('status', ['pending', 'confirmed', 'canceled', 'completed'])->default('pending'); 
            $table->text('catatan')->nullable(); // Catatan tambahan
            $table->timestamps(); // created_at dan updated_at

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kasir_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
