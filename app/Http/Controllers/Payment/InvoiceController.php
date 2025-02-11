<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index($uuid)
    {
        $data = \App\Models\Transaksi::where('uuid', $uuid)->first();
        if (!$data) { return view('pages.payment.not-found');}

        return view('pages.payment.invoice', compact('data'));
    }
}

