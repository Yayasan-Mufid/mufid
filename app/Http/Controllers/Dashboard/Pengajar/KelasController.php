<?php

namespace App\Http\Controllers\Dashboard\Pengajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index($unit)
    {
        return view('dashboard.pengajar.kelas.index', compact('unit'));
    }
}
