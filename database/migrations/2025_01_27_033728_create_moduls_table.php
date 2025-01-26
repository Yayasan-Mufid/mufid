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
        Schema::create('moduls', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('jadwal_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('pembelajaran_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('status')->default('publish'); // publish, draft;
            $table->timestamp('batas_mulai')->nullable();
            $table->timestamp('batas_akhir')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('urutan')->nullable();
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
        Schema::dropIfExists('moduls');
    }
};
