<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'nama',
        'slug',
        'keterangan',
        'data',
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
  }
