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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('periode_id')->nullable()->constrained('periodes');
            $table->foreignId('unit_id')->nullable()->constrained('units');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('nis_peserta')->unique()->nullable();
            $table->string('nama');
            $table->string('phone_number')->nullable();
            $table->json('biodata')->nullable(); // informasi peserta secara keseluruhan
            $table->string('foto')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_peserta', ['IKHWAN', 'AKHWAT']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
