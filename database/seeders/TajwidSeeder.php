<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Unit;
use App\Models\Periode;
use App\Models\Level;


class TajwidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'tajwid-ikhwan-admin']);
        Role::create(['name' => 'tajwid-ikhwan-ketua']);
        Role::create(['name' => 'tajwid-ikhwan-keuangan']);
        Role::create(['name' => 'tajwid-ikhwan-pengajar']);

        Role::create(['name' => 'tajwid-akhwat-admin']);
        Role::create(['name' => 'tajwid-akhwat-ketua']);
        Role::create(['name' => 'tajwid-akhwat-keuangan']);
        Role::create(['name' => 'tajwid-akhwat-pengajar']);

        Unit::create([
            'id' => 2,
            'divisi_id' => 1,
            'nama' => 'Tajwid Ikhwan',
            'slug' => 'tajwid-ikhwan',
        ]);

        Unit::create([
            'id' => 3,
            'divisi_id' => 1,
            'nama' => 'Tajwid Akhwat',
            'slug' => 'tajwid-akhwat',
        ]);

        Periode::create([
            'unit_id' => 2,
            'nama' => 'Tajwid Ikhwan Angkatan 12',
            'slug' => 'tajwid-ikhwan-angkatan-12',
            'tahun_ajaran' => '2025',
            'angkatan' => 12,
            'aktifkan_pendaftaran' => true,
            'format_absensi'       => json_encode([
                                                [
                                                    '1' => '',
                                                    '2' => '',
                                                    '3' => '',
                                                    '4' => '',
                                                    '5' => '',
                                                    '6' => '',
                                                    '7' => '',
                                                    '8' => '',
                                                    '9' => '',
                                                    '10' => '',
                                                    '11' => '',
                                                    '12' => '',
                                                    '13' => '',
                                                    '14' => '',
                                                    '15' => '',
                                                    '16' => '',
                                                ],
                                            ]),
            'format_pembayaran'    => json_encode([
                                                ['name' => 'pendaftaran', 'label' => 'PENDAFTARAN', 'value' => 850000, 'disabled' => false, 'checked' => false, 'required' => true],
                                                ['name' => 'spp1', 'label' => 'SPP BULAN I', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => true],
                                                ['name' => 'spp2', 'label' => 'SPP BULAN II', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => true],
                                                ['name' => 'spp3', 'label' => 'SPP BULAN III', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => false],
                                                ['name' => 'spp4', 'label' => 'SPP BULAN IV', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => false],
                                            ]),
        ]);

        Periode::create([
            'unit_id' => 3,
            'nama' => 'Tajwid Akhwat Angkatan 12',
            'slug' => 'tajwid-akhwat-angkatan-12',
            'tahun_ajaran' => '2025',
            'angkatan' => 12,
            'aktifkan_pendaftaran' => true,
            'format_absensi'       => json_encode([
                                                [
                                                    '1' => '',
                                                    '2' => '',
                                                    '3' => '',
                                                    '4' => '',
                                                    '5' => '',
                                                    '6' => '',
                                                    '7' => '',
                                                    '8' => '',
                                                    '9' => '',
                                                    '10' => '',
                                                    '11' => '',
                                                    '12' => '',
                                                    '13' => '',
                                                    '14' => '',
                                                    '15' => '',
                                                    '16' => '',
                                                ],
                                            ]),
            'format_pembayaran'    => json_encode([
                                                ['name' => 'pendaftaran', 'label' => 'PENDAFTARAN', 'value' => 850000, 'disabled' => false, 'checked' => false, 'required' => true],
                                                ['name' => 'spp1', 'label' => 'SPP BULAN I', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => true],
                                                ['name' => 'spp2', 'label' => 'SPP BULAN II', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => true],
                                                ['name' => 'spp3', 'label' => 'SPP BULAN III', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => false],
                                                ['name' => 'spp4', 'label' => 'SPP BULAN IV', 'value' => 100000, 'disabled' => false, 'checked' => false, 'required' => false],
                                            ]),
        ]);

        Level::create([
            'unit_id' => 2,
            'nama' => 'Mustawaa Tamhidiy',
            'slug' => 'mustawaa-tamhidiy',
            'urutan' => 1,
        ]);
        Level::create([
            'unit_id' => 2,
            'nama' => 'Mustawaa Awwal',
            'slug' => 'mustawaa-awwal',
            'urutan' => 2,
        ]);
        Level::create([
            'unit_id' => 2,
            'nama' => 'Mustawaa Tsaniy',
            'slug' => 'mustawaa-tsaniy',
            'urutan' => 3,
        ]);
        Level::create([
            'unit_id' => 2,
            'nama' => 'Mustawaa Mutawassithah',
            'slug' => 'mustawaa-mutawassithah',
            'urutan' => 4,
        ]);
        Level::create([
            'unit_id' => 2,
            'nama' => 'Mustawaa Tsalist',
            'slug' => 'mustawaa-tsalist',
            'urutan' => 5,
        ]);
        Level::create([
            'unit_id' => 2,
            'nama' => 'Mustawaa Raabi',
            'slug' => 'mustawaa-raabi',
            'urutan' => 6,
        ]);

        ////...

        Level::create([
            'unit_id' => 3,
            'nama' => 'Mustawaa Tamhidiy',
            'slug' => 'mustawaa-tamhidiy',
            'urutan' => 1,
        ]);
        Level::create([
            'unit_id' => 3,
            'nama' => 'Mustawaa Awwal',
            'slug' => 'mustawaa-awwal',
            'urutan' => 2,
        ]);
        Level::create([
            'unit_id' => 3,
            'nama' => 'Mustawaa Tsaniy',
            'slug' => 'mustawaa-tsaniy',
            'urutan' => 3,
        ]);
        Level::create([
            'unit_id' => 3,
            'nama' => 'Mustawaa Mutawassithah',
            'slug' => 'mustawaa-mutawassithah',
            'urutan' => 4,
        ]);
        Level::create([
            'unit_id' => 3,
            'nama' => 'Mustawaa Tsalist',
            'slug' => 'mustawaa-tsalist',
            'urutan' => 5,
        ]);
        Level::create([
            'unit_id' => 3,
            'nama' => 'Mustawaa Raabi',
            'slug' => 'mustawaa-raabi',
            'urutan' => 6,
        ]);
    }
}
