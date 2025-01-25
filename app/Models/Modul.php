<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;
    protected $fillable = [
      'uuid',
      'jadwal_id',
      'nama',
      'slug',
      'status',
      'batas_mulai',
      'batas_akhir',
      'keterangan',
      'data',
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
     * Get the jadwal associated with the current jadwal.
     */
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
