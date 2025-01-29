<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function dashboard($unit)
    {

        return view('dashboard.admin.dashboard', compact('unit'));
    }
}
