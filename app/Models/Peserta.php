<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'periode_id',
        'unit_id',
        'user_id',
        'nis_peserta',
        'nama',
        'phone_number',
        'biodata',
        'foto',
        'tanggal_lahir',
        'jenis_peserta',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'biodata' => 'array',
    ];

    /**
     * Get the periode associated with the peserta.
     */
    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    /**
     * Get the user associated with the peserta.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the kelas associated with the peserta.
     */
    public function kelas()
    {
        return $this->hasOne(Kelas::class);
    }


    /**
     * Get the unit associated with the peserta.
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    /**
     * Get the transaksi associated with the peserta.
     */
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

}
