<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Spatie\Permission\Models\Role;
use App\Models\RoleToUnit;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $roles = Role::all();
        foreach (auth()->user()->roles as  $item) {
            $roleuser[] = RoleToUnit::getByRole($item->name);
        }
        return view('layouts.app', compact('roles', 'roleuser'));
    }
}
