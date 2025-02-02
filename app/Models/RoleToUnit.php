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

        ['nama' => 'Admin', 'role' => 'tajwid-ikhwan-admin', 'nama-unit' => 'Tajwid Ikhwan' ,'unit' => 'tajwid-ikhwan', 'url' => '/dashboard/admin'],
        ['nama' => 'Ketua', 'role' => 'tajwid-ikhwan-ketua', 'nama-unit' => 'Tajwid Ikhwan' ,'unit' => 'tajwid-ikhwan', 'url' => '/dashboard/ketua'],
        ['nama' => 'Keuangan', 'role' => 'tajwid-ikhwan-keuangan', 'nama-unit' => 'Tajwid Ikhwan' ,'unit' => 'tajwid-ikhwan', 'url' => '/dashboard/keuangan'],
        ['nama' => 'Muallim', 'role' => 'tajwid-ikhwan-pengajar', 'nama-unit' => 'Tajwid Ikhwan' ,'unit' => 'tajwid-ikhwan', 'url' => '/dashboard/pengajar'],

        ['nama' => 'Admin', 'role' => 'tajwid-akhwat-admin', 'nama-unit' => 'Tajwid Akhwat' ,'unit' => 'tajwid-akhwat', 'url' => '/dashboard/admin'],
        ['nama' => 'Ketua', 'role' => 'tajwid-akhwat-ketua', 'nama-unit' => 'Tajwid Akhwat' ,'unit' => 'tajwid-akhwat', 'url' => '/dashboard/ketua'],
        ['nama' => 'Keuangan', 'role' => 'tajwid-akhwat-keuangan', 'nama-unit' => 'Tajwid Akhwat' ,'unit' => 'tajwid-akhwat', 'url' => '/dashboard/keuangan'],
        ['nama' => 'Muallimah', 'role' => 'tajwid-akhwat-pengajar', 'nama-unit' => 'Tajwid Akhwat' ,'unit' => 'tajwid-akhwat', 'url' => '/dashboard/pengajar'],
    ];

    public static function getByRole($role)
    {
        return collect(self::$data)->firstWhere('role', $role);
    }

}
