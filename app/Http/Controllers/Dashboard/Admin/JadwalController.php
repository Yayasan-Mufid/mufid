<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index($unit)
    {
        if($unit == 'mia') {
            $table = new \App\Tables\Admin\MiaJadwalTable();
        } elseif($unit == 'tajwid-ikhwan') {
            $table = new \App\Tables\Admin\TajwidIkhwanJadwalTable();
        } elseif($unit == 'tajwid-akhwat') {
            $table = new \App\Tables\Admin\TajwidAkhwatJadwalTable();
        } else {
            $table = new \App\Tables\Admin\MiaJadwalTable();
        }
        return view('dashboard.admin.jadwal.index', compact('unit', 'table'));
    }
}
