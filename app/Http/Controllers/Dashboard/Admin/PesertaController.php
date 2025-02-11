<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    private function getPesertaTable($unit)
    {
        return match ($unit) {
            'tajwid-ikhwan' => new \App\Tables\Admin\TajwidIkhwanPesertaTable(),
            'tajwid-akhwat' => new \App\Tables\Admin\TajwidAkhwatPesertaTable(),
            default => new \App\Tables\Admin\MiaPesertaTable(),
        };
    }

    public function index($unit)
    {
        $table = $this->getPesertaTable($unit);
        return view('dashboard.admin.peserta.index', compact('unit', 'table'));
    }


    public function show($unit, $peserta)
    {
        $table = $this->getPesertaTable($unit);
        $peserta = \App\Models\Peserta::findOrFail($peserta);
        return view('dashboard.admin.peserta.show', compact('unit', 'peserta'));
    }
}
