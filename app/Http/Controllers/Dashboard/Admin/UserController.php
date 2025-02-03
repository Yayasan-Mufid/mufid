<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($unit)
    {
        if($unit == 'mia') {
            $table = new \App\Tables\Admin\MiaUserTable();
        } elseif($unit == 'tajwid-ikhwan') {
            $table = new \App\Tables\Admin\TajwidIkhwanUserTable();
        } elseif($unit == 'tajwid-akhwat') {
            $table = new \App\Tables\Admin\TajwidAkhwatUserTable();
        } else {
            $table = new \App\Tables\Admin\MiaUserTable();
        }
        return view('dashboard.admin.user.index', compact('unit', 'table'));
    }

    public function show($unit)
    {
        return view('dashboard.admin.user.show', compact('unit'));
    }
}
