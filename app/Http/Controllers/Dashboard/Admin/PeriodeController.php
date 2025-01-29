<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Tables\Admin\MiaPeriodeTable;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index($unit)
    {
        if($unit == 'mia') {
            $table = new MiaPeriodeTable();
        } else {
            $table = new MiaPeriodeTable();
        }
        return view('dashboard.admin.periode.index', compact('unit', 'table'));
    }
}
