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
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('modul_id')->constrained()->onDelete('cascade');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->enum('jenis', ['text', 'video', 'file', 'pertanyaan']);
            $table->text('konten')->nullable();
            $table->string('status')->default('publish'); // publish, draft;
            $table->timestamp('batas_mulai')->nullable();
            $table->timestamp('batas_akhir')->nullable();
            $table->text('keterangan')->nullable();
            $table->json('data')->nullable(); // data dinamis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
