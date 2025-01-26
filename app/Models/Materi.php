<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $fillable = [
      'uuid',
      'modul_id',
      'judul',
      'slug',
      'jenis',
      'konten',
      'status',
      'batas_mulai',
      'batas_akhir',
      'keterangan',
      'data',
      'thumbnail',
      'urutan',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'array',
        'batas_mulai' => 'datetime',
        'batas_akhir' => 'datetime',
    ];

    /**
     * Get the modul associated with the current modul.
     */
    public function modul()
    {
        return $this->belongsTo(Modul::class);
    }
}
