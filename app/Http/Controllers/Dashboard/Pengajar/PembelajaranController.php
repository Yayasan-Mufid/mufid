<?php

namespace App\Http\Controllers\Dashboard\Pengajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function index($unit)
    {
        return view('dashboard.pengajar.pembelajaran.index', compact('unit'));
    }
}
