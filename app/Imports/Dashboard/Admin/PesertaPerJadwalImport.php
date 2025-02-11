<?php

namespace App\Imports\Dashboard\Admin;

use Maatwebsite\Excel\Concerns\ToModel;

class PesertaPerJadwalImport implements ToModel
{
    public function model(array $row)
    {
        return new \App\Models\Kelas([
            'jadwal_id'  => $row['jadwal_id'],
            'nama_kelas' => $row['nama_kelas'],
            'deskripsi'  => $row['deskripsi'],
        ]);
    }
}
