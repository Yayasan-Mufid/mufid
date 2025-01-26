<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelajaran extends Model
{
    use HasFactory;

    protected $fillable = [
      'judul',
      'slug',
      'deskripsi',
      'thumbnail',
      'pembelajaran_kategori_id',
      'harga',
      'diskon',
      'pengajar_id',
      'periode_id',
      'video_preview',
      'durasi_total',
      'jadwal_mulai',
      'jadwal_selesai',
      'tingkat_pembelajaran',
      'bahasa',
      'status',
      'publikasi',
      'meta',
      'tag',
      'data',
      'galeri',
    ];

    /**
     * Properti yang di-cast ke tipe data tertentu.
     *
     * @var array
     */
    protected $casts = [
        'harga' => 'float',
        'diskon' => 'float',
        'harga_diskon' => 'float',
        'jadwal_mulai' => 'datetime',
        'jadwal_selesai' => 'datetime',
        'publikasi' => 'datetime',
        'meta' => 'array',
        'tag' => 'array',
        'data' => 'array',
        'galeri' => 'array',
    ];

    /**
     * Relasi ke tabel `pembelajaran_kategoris`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo(PembelajaranKategori::class, 'pembelajarankategori_id');
    }

    /**
     * Relasi ke tabel `pengajars`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class, 'pengajar_id');
    }

    /**
     * Hitung harga diskon (accessor).
     *
     * @return float
     */
    public function getHargaDiskonAttribute()
    {
        return $this->harga - $this->diskon;
    }
}
