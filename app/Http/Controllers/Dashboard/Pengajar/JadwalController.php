<?php

namespace App\Http\Controllers\Dashboard\Pengajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index($unit)
    {
        return view('dashboard.pengajar.jadwal.index', compact('unit'));
    }
}
