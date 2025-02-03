<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function index($unit)
    {
        if($unit == 'mia') {
            $table = new \App\Tables\Admin\MiaPengajarTable();
        } elseif($unit == 'tajwid-ikhwan') {
            $table = new \App\Tables\Admin\TajwidIkhwanPengajarTable();
        } elseif($unit == 'tajwid-akhwat') {
            $table = new \App\Tables\Admin\TajwidAkhwatPengajarTable();
        } else {
            $table = new \App\Tables\Admin\MiaPengajarTable();
        }
        return view('dashboard.admin.pengajar.index', compact('unit', 'table'));
    }
}
