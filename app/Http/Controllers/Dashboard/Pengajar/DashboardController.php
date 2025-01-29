<?php

namespace App\Http\Controllers\Dashboard\Pengajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard($unit)
    {

        return view('dashboard.pengajar.dashboard', compact('unit'));
    }
}
