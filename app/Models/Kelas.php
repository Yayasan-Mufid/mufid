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
      'pembelajaran_id',
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

/**
 * Get the transaksi associated with the kelas.
 */
    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }

/**
 * Get the related kelas instances with the value from data_absensi and fetch the 'pendaftaran' key from data_pembayaran.
 *
 * @return \Illuminate\Database\Eloquent\Collection
 */
    public function nominal_pendaftaran() { return $this->belongsTo(Kelas::class, 'id'); }
    public function nominal_spp1() { return $this->belongsTo(Kelas::class, 'id'); }
    public function nominal_spp2() { return $this->belongsTo(Kelas::class, 'id'); }
    public function nominal_spp3() { return $this->belongsTo(Kelas::class, 'id'); }
    public function nominal_spp4() { return $this->belongsTo(Kelas::class, 'id'); }
    public function nominal_total() { return $this->belongsTo(Kelas::class, 'id'); }
    public function status_transaksi() { return $this->belongsTo(Kelas::class, 'id'); }


}
