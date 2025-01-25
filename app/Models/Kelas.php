<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
      'uuid',
      'peserta_id',
      'periode_id',
      'jadwal_id',
      'nis_peserta',
      'data',
      'data_pembayaran',
      'data_absensi',
      'data_nilai',
      'data_jawaban',
      'status_penerimaan',
      'status_aktif',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'array',
        'data_pembayaran' => 'array',
        'data_absensi' => 'array',
        'data_nilai' => 'array',
        'data_jawaban' => 'array',
    ];

    /**
     * Get the peserta associated with the kelas.
     */
    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    /**
     * Get the periode associated with the kelas.
     */
    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    /**
     * Get the jadwal associated with the kelas.
     */
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
