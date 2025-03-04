<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelajaranKategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'keterangan',
        'status',
        'urutan',
        'thumbnail',
    ];

}
