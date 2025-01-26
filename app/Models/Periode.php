<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'nama',
        'slug',
        'waktu_start',
        'waktu_end',
        'tahun_ajaran',
        'angkatan',
        'format_biodata',
        'format_pembayaran',
        'format_absensi',
        'format_rapot',
        'format_nilai',
        'notifikasi',
        'aktifkan_pendaftaran',
        'tanggal_tagihan',
        'data',
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
