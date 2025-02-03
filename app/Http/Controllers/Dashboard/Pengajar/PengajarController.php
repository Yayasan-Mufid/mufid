<?php

namespace App\Http\Controllers\Dashboard\Pengajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function index($unit)
    {
        return view('dashboard.pengajar.pengajar.index', compact('unit'));
    }
}
