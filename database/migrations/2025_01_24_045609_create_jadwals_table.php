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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('periode_id')->nullable()->constrained('periodes')->nullOnDelete();
            $table->string('slug')->unique();
            $table->string('nip_pengajar')->nullable();
            $table->string('jadwal_belajar')->nullable();
            $table->string('nama_jadwal')->nullable();
            $table->string('jenis_peserta')->nullable();
            $table->foreignId('level_id')->nullable()->constrained();
            $table->integer('batasan_peserta')->nullable();
            $table->integer('banyak_peserta')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('status_belajar')->nullable(); // online, offline
            $table->string('status_waktu')->nullable(); // berjangka, fleksibel
            $table->timestamp('batas_mulai')->nullable();
            $table->timestamp('batas_akhir')->nullable();
            $table->json('data')->nullable(); // data dinamis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
