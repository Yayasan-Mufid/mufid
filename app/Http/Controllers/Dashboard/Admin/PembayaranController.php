<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    private function getPembayaranRekapTable($unit)
    {
        return match ($unit) {
            'tajwid-ikhwan' => new \App\Tables\Admin\TajwidIkhwanPembayaranRekapTable(),
            'tajwid-akhwat' => new \App\Tables\Admin\TajwidAkhwatPembayaranRekapTable(),
            default => new \App\Tables\Admin\TajwidAkhwatPembayaranRekapTable(),
        };
    }

    private function getPembayaranTransaksiTable($unit)
    {
        return match ($unit) {
            'tajwid-ikhwan' => new \App\Tables\Admin\TajwidIkhwanPembayaranTransaksiTable(),
            'tajwid-akhwat' => new \App\Tables\Admin\TajwidAkhwatPembayaranTransaksiTable(),
            default => new \App\Tables\Admin\MiaPembayaranTransaksiTable(),
        };
    }
    public function index($unit)
    {
        return view('dashboard.admin.pembayaran.index', compact('unit'));
    }

    public function rekap($unit)
    {
        $table = $this->getPembayaranRekapTable($unit);
        return view('dashboard.admin.pembayaran.rekap', compact('unit', 'table'));
    }

    public function transaksi($unit)
    {
        $table = $this->getPembayaranTransaksiTable($unit);
        return view('dashboard.admin.pembayaran.transaksi', compact('unit', 'table'));
    }

    public function peserta($unit, $peserta)
    {
        $peserta = \App\Models\Peserta::findOrFail($peserta);
        return view('dashboard.admin.pembayaran.peserta', compact('unit', 'peserta'));
    }
}
