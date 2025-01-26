<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
      'uuid',
      'periode_id',
      'jadwal_id',
      'peserta_id',
      'user_id',
      'status',
      'kode_unik',
      'nominal_total',
      'nominal_total_pembayaran',
      'detail_pembayaran',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'detail_pembayaran' => 'array',
    ];

    /**
     * Get the periode associated with the transaksi.
     */
    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }

    /**
     * Get the peserta associated with the transaksi.
     */
    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    /**
     * Get the user associated with the transaksi.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
