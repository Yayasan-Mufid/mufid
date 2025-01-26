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
        Schema::create('periodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_id');
            $table->string('nama');
            $table->string('slug')->unique();
            $table->timestamp('waktu_start')->nullable();
            $table->timestamp('waktu_end')->nullable();
            $table->string('tahun_ajaran');
            $table->string('angkatan');
            $table->json('format_biodata')->nullable();
            $table->json('format_pembayaran')->nullable();
            $table->json('format_absensi')->nullable();
            $table->json('format_rapot')->nullable();
            $table->json('format_nilai')->nullable();
            $table->json('notifikasi')->nullable();
            $table->boolean('aktifkan_pendaftaran')->default(1);
            $table->date('tanggal_tagihan')->nullable();
            $table->json('data')->nullable();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodes');
    }
};
