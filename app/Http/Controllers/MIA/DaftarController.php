<?php

namespace App\Http\Controllers\MIA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('pages.mia.daftar');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function akses()
    {
        return view('mia.akses');
    }
}
