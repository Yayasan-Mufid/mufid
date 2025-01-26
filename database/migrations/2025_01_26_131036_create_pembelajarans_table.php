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
        Schema::create('pembelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Judul kursus
            $table->string('slug')->unique(); // Slug untuk URL-friendly
            $table->text('deskripsi')->nullable(); // Deskripsi kursus
            $table->string('thumbnail')->nullable(); // URL gambar thumbnail
            $table->foreignId('periode_id')->nullable()->constrained('periodes');
            $table->foreignId('pembelajaran_kategori_id')->nullable()->constrained('pembelajaran_kategoris')->onDelete('set null'); // Relasi ke kategori
            $table->decimal('harga', 10, 2)->default(0); // Harga kursus
            $table->decimal('diskon', 10, 2)->default(0); // Diskon (opsional)
            $table->decimal('harga_diskon', 10, 2)->storedAs('harga - diskon'); // Harga setelah diskon
            $table->foreignId('pengajar_id')->nullable()->constrained('pengajars')->onDelete('cascade'); // Relasi ke instruktur
            $table->string('video_preview')->nullable(); // URL video preview
            $table->integer('durasi_total')->nullable(); // Total durasi kursus (dalam menit)
            $table->dateTime('jadwal_mulai')->nullable(); // Jadwal mulai kursus
            $table->dateTime('jadwal_selesai')->nullable(); // Jadwal selesai kursus
            $table->string('tingkat_pembelajaran')->default('Pemula'); // Tingkat kesulitan ['Pemula', 'Menengah', 'Lanjutan']
            $table->string('bahasa', 50)->default('Indonesia'); // Bahasa pengantar
            $table->enum('status', ['draft', 'aktif', 'nonaktif'])->default('draft'); // Status kursus
            $table->dateTime('publikasi')->nullable(); // Tanggal publikasi
            $table->string('total_waktu_belajar')->nullable();
            $table->json('meta')->nullable(); // Metadata untuk SEO
            $table->json('tag')->nullable(); // Tag atau label (disimpan dalam JSON)
            $table->json('data')->nullable(); // Detail Tambahan
            $table->json('galeri')->nullable(); // Detail Tambahan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelajarans');
    }
};
