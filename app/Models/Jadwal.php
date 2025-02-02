<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'periode_id',
        'slug',
        'pengajar_id',
        'jadwal_belajar',
        'nama_jadwal',
        'jenis_peserta',
        'level_id',
        'batasan_peserta',
        'banyak_peserta',
        'keterangan',
        'status_belajar',
        'status_waktu',
        'batas_mulai',
        'batas_akhir',
        'data',
    ];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

}
