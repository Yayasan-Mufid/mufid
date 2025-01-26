<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Divisi;
use App\Models\Unit;
use App\Models\Periode;
use App\Models\Level;
use App\Models\PembelajaranKategori;
use App\Models\Pembelajaran;
use App\Models\Modul;
use App\Models\Materi;
use Illuminate\Support\Str;



class MiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'mia-admin']);
        Role::create(['name' => 'mia-ketua']);
        Role::create(['name' => 'mia-keuangan']);
        Role::create(['name' => 'mia-pengajar']);

        Divisi::create([
          'id' => 1,
          'nama' => 'Pendidikan Non Formal',
          'slug' => 'pendidikan-non-formal',
        ]);

        Unit::create([
          'id' => 1,
          'divisi_id' => 1,
          'nama' => 'Mufid Islam Academy',
          'slug' => 'mia',
        ]);

        Periode::create([
          'id' => 1,
          'unit_id' => 1,
          'nama' => 'Angkatan 7',
          'slug' => 'angkatan-7',
          'tahun_ajaran' => '2025',
          'angkatan' => '7',
          'aktifkan_pendaftaran' => true,
        ]);

        for ($i = 1; $i <= 12; $i++) {
            Level::create([
                'id' => $i,
                'unit_id' => 1,
                'nama' => (string)$i,
                'slug' => (string)$i,
            ]);
        }

        PembelajaranKategori::create([
            'id' => 1,
            'nama' => 'Fiqih',
            'slug' => 'fiqih',
        ]);

        Pembelajaran::create([
            'id' => 1,
            'pembelajaran_kategori_id' => 1,
            'judul' => 'Kitab Fiqih 1',
            'slug' => 'kitab-fiqih-1',
            'deskripsi' => 'Pembelajaran Fiqih Bagian 1',
            'thumbnail' => 'https://placehold.co/600x400',
            'harga' => 100000,
            'periode_id' => 1,
        ]);

        Modul::create([
            'id' => 1,
            'uuid' => Str::uuid(),
            'pembelajaran_id' => 1,
            'nama' => 'Modul 1',
            'slug' => 'modul-1',
            'status' => 'publish',
            'thumbnail' => 'https://placehold.co/600x400',
            'urutan' => 1,
            'keterangan' => 'Modul  1',
            'total_waktu_belajar' => '1 Jam',
        ]);
        Modul::create([
            'id' => 2,
            'uuid' => Str::uuid(),
            'pembelajaran_id' => 1,
            'nama' => 'Modul 2',
            'slug' => 'modul-2',
            'status' => 'publish',
            'thumbnail' => 'https://placehold.co/600x400',
            'urutan' => 2,
            'keterangan' => 'Modul 2',
            'total_waktu_belajar' => '30 Menit',
        ]);

        Materi::create([
            'id' => 1,
            'uuid' => Str::uuid(),
            'modul_id' => 1,
            'judul' => 'Materi 1',
            'slug' => 'materi-1',
            'status' => 'publish',
            'thumbnail' => 'https://placehold.co/600x400',
            'urutan' => 1,
            'jenis' => 'video',
            'keterangan' => 'Materi 1',
            'total_waktu_belajar' => '30:00',
        ]);
        Materi::create([
            'id' => 2,
            'uuid' => Str::uuid(),
            'modul_id' => 1,
            'judul' => 'Materi 2',
            'slug' => 'materi-2',
            'status' => 'publish',
            'thumbnail' => 'https://placehold.co/600x400',
            'urutan' => 2,
            'jenis' => 'video',
            'keterangan' => 'Materi 2',
            'total_waktu_belajar' => '30:00',
        ]);
        Materi::create([
            'id' => 3,
            'uuid' => Str::uuid(),
            'modul_id' => 2,
            'judul' => 'Materi 3',
            'slug' => 'materi-3',
            'status' => 'publish',
            'thumbnail' => 'https://placehold.co/600x400',
            'urutan' => 1,
            'jenis' => 'video',
            'keterangan' => 'Materi 3',
            'total_waktu_belajar' => '30:00',
        ]);
    }
}
