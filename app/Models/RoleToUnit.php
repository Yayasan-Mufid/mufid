<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleToUnit extends Model
{
    use HasFactory;

    public static $data = [
        ['nama' => 'Super Admin', 'role' => 'super-admin', 'nama-unit' => 'Super Admin' ,'unit' => '', 'url' => '/dashboard/super-admin'],
        ['nama' => 'Admin', 'role' => 'mia-admin', 'nama-unit' => 'Mufid Islam Academy' ,'unit' => 'mia', 'url' => '/dashboard/admin'],
        ['nama' => 'Ketua', 'role' => 'mia-ketua', 'nama-unit' => 'Mufid Islam Academy' ,'unit' => 'mia', 'url' => '/dashboard/ketua'],
        ['nama' => 'Keuangan', 'role' => 'mia-keuangan', 'nama-unit' => 'Mufid Islam Academy' ,'unit' => 'mia', 'url' => '/dashboard/keuangan'],
        ['nama' => 'Muallim / Muallimah', 'role' => 'mia-pengajar', 'nama-unit' => 'Mufid Islam Academy' ,'unit' => 'mia', 'url' => '/dashboard/pengajar'],
    ];

    public static function getByRole($role)
    {
        return collect(self::$data)->firstWhere('role', $role);
    }

}
