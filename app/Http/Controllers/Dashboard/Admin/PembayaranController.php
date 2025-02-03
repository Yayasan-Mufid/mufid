<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index($unit)
    {
        return view('dashboard.admin.pembayaran.index', compact('unit'));
    }

    public function rekap($unit)
    {
        return view('dashboard.admin.pembayaran.rekap', compact('unit'));
    }

    public function transaksi($unit)
    {
        return view('dashboard.admin.pembayaran.transaksi', compact('unit'));
    }
}
