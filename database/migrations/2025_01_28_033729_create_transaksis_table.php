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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('periode_id')->nullable()->constrained('periodes')->onDelete('set null');
            $table->foreignId('kelas_id')->nullable()->constrained('kelas')->onDelete('set null');
            $table->foreignId('peserta_id')->nullable()->constrained('pesertas')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('status')->default('MENUNGGU PEMBAYARAN'); // menunggu_pembayaran - menunggu_konfirmasi - lunas - kadaluarsa
            $table->integer('kode_unik')->default(0);
            $table->integer('nominal_total')->default(0);
            $table->integer('nominal_total_pembayaran')->default(0);
            $table->json('detail_pembayaran')->nullable(); // detail
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
