<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index($unit)
    {
        if($unit == 'mia') {
            $table = new \App\Tables\Admin\MiaPesertaTable();
        } elseif($unit == 'tajwid-ikhwan') {
            $table = new \App\Tables\Admin\TajwidIkhwanPesertaTable();
        } elseif($unit == 'tajwid-akhwat') {
            $table = new \App\Tables\Admin\TajwidAkhwatPesertaTable();
        } else {
            $table = new \App\Tables\Admin\MiaPesertaTable();
        }
        return view('dashboard.admin.peserta.index', compact('unit', 'table'));
    }
}
