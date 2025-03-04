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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('divisi_id')->nullable();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('kategori')->nullable(); // kelas online, kelas offline
            $table->text('keterangan')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('urutan')->nullable();
            $table->json('data')->nullable();
            $table->foreign('divisi_id')->nullable()->references('id')->on('divisis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
