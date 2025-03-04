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
        Schema::create('pengajars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('periode_id')->nullable()->constrained('periodes')->onDelete('set null');
            $table->foreignId('unit_id')->nullable()->constrained('units')->onDelete('set null');
            $table->foreignId('user_id')->constrained();
            $table->string('kode_pengajar')->nullable()->unique();
            $table->string('slug')->nullable()->unique();
            $table->date('tanggal_masuk')->nullable();
            $table->string('kode_nama_pengajar')->nullable();
            $table->string('nip_pengajar')->nullable();
            $table->json('data')->nullable();
            $table->string('foto')->nullable();
            $table->boolean('status_aktif')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajars');
    }
};
