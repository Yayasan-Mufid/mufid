<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\RoleToUnit;


class DashboardController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        foreach (auth()->user()->roles as  $item) {
            $roleuser[] = RoleToUnit::getByRole($item->name);
        }
        return view('dashboard', compact('roles', 'roleuser'));
    }

    public function akses()
    {
        $roles = Role::all();
        foreach (auth()->user()->roles as  $item) {
            $roleuser[] = RoleToUnit::getByRole($item->name);
        }
        return view('pages.akses', compact('roles', 'roleuser'));
    }

    public function data()
    {
        $roles = Role::all();
        foreach (auth()->user()->roles as  $item) {
            $roleuser[] = RoleToUnit::getByRole($item->name);
        }
        return view('pages.data', compact('roles', 'roleuser'));
    }

    public function pembayaran()
    {
        $roles = Role::all();
        foreach (auth()->user()->roles as  $item) {
            $roleuser[] = RoleToUnit::getByRole($item->name);
        }
        return view('pages.pembayaran', compact('roles', 'roleuser'));
    }
}
