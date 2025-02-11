<?php

namespace App\Http\Controllers\Dashboard\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class PembayaranController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $roleuser = auth()->user()->roles->map(fn ($role) => \App\Models\RoleToUnit::getByRole($role->name));
        $data_pembayaran = \App\Models\Transaksi::whereHas('peserta', function($query) {
            $query->where('phone_number', auth()->user()->phone_number)
                ->orWhere('user_id', auth()->user()->id);
        })->orderBy('created_at', 'DESC')->paginate(10);
        return view('dashboard.peserta.pembayaran.index', compact('roles', 'roleuser', 'data_pembayaran'));
    }
}
