<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'kategori',
        'keterangan',
        'divisi_id',
    ];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

}
