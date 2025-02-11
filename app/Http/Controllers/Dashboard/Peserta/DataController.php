<?php

namespace App\Http\Controllers\Dashboard\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class DataController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $roleuser = auth()->user()->roles->map(fn ($role) => \App\Models\RoleToUnit::getByRole($role->name));
        $data_peserta = \App\Models\Peserta::where(function($query) {
                            $query->where('user_id', auth()->user()->id)
                                ->orWhere('phone_number', auth()->user()->phone_number);
                        })->paginate(10);
        return view('dashboard.peserta.data.index', compact('roles', 'roleuser', 'data_peserta'));
    }

    public function show($uuid)
    {
        $roles = Role::all();
        $roleuser = auth()->user()->roles->map(fn ($role) => \App\Models\RoleToUnit::getByRole($role->name));
        $peserta = \App\Models\Peserta::where('uuid', $uuid)->where(function($query) {
                            $query->where('user_id', auth()->user()->id)
                                ->orWhere('phone_number', auth()->user()->phone_number);
                        })->first();

        //mengatasi data import dari excel untuk segera di relasikan ke user login
        if ($peserta && is_null($peserta->user_id)) {
            $peserta->user_id = auth()->user()->id;
            $peserta->save();
        }

        return view('dashboard.peserta.data.show', compact('roles', 'roleuser', 'peserta'));
    }
}
