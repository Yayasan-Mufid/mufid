<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class DashboardController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $roleuser = auth()->user()->roles->map(fn ($role) => \App\Models\RoleToUnit::getByRole($role->name));
        $data_peserta = \App\Models\Peserta::where(function($query) {
                            $query->where('user_id', auth()->user()->id)
                                ->orWhere('phone_number', auth()->user()->phone_number);
                        })->get();
        return view('dashboard', compact('roles', 'roleuser', 'data_peserta'));
    }

    public function akses()
    {
        $roles = Role::all();
        $roleuser = auth()->user()->roles->map(fn ($role) => \App\Models\RoleToUnit::getByRole($role->name));
        return view('pages.akses', compact('roles', 'roleuser'));
    }

    // public function data()
    // {
    //     $roles = Role::all();
    //     $roleuser = auth()->user()->roles->map(fn ($role) => \App\Models\RoleToUnit::getByRole($role->name));
    //     $data_peserta = \App\Models\Peserta::where('user_id', auth()->user()->id)->get();
    //     return view('dashboard.peserta.data', compact('roles', 'roleuser', 'data_peserta'));
    // }

    // public function data_show($uuid)
    // {
    //     $roles = Role::all();
    //     $roleuser = auth()->user()->roles->map(fn ($role) => \App\Models\RoleToUnit::getByRole($role->name));
    //     $peserta = \App\Models\Peserta::where('uuid', $uuid)->first();
    //     return view('dashboard.peserta.data', compact('roles', 'roleuser', 'peserta'));
    // }

    public function pembayaran()
    {
        $roles = Role::all();
        $roleuser = auth()->user()->roles->map(fn ($role) => \App\Models\RoleToUnit::getByRole($role->name));
        return view('dashboard.peserta.pembayaran', compact('roles', 'roleuser'));
    }
}
