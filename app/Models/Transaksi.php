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
      'kelas_id',
      'peserta_id',
      'user_id',
      'status',
      'kode_unik',
      'nominal_total',
      'nominal_total_pembayaran',
      'detail_pembayaran',
      'pembelajaran_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'detail_pembayaran' => 'array',
        // 'status' => 'enum:MENUNGGU PEMBAYARAN,MENUNGGU KONFIRMASI,LUNAS,KADALUARSA',
    ];

    /**
     * Get the periode associated with the transaksi.
     */
    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
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

/**
 * Get the unit associated with the transaksi.
 */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }



    public function fun_nominal_total() { return $this->belongsTo(Transaksi::class, 'id'); }
    public function fun_nominal_total_pembayaran() { return $this->belongsTo(Transaksi::class, 'id'); }

}
