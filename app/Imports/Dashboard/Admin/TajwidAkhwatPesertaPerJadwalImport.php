<?php

namespace App\Imports\Dashboard\Admin;

use App\Models\Peserta;
use App\Models\Kelas;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Log;

class TajwidAkhwatPesertaPerJadwalImport implements ToCollection, WithHeadingRow
{
    protected $jadwal_id;
    protected $periode_id;
    protected $unit_id;

    public $successCount = 0;
    public $failCount = 0;
    public $failures = [];

    public function __construct($jadwal_id, $periode_id, $unit_id)
    {
        $this->jadwal_id  = $jadwal_id;
        $this->periode_id = $periode_id;
        $this->unit_id    = $unit_id;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // try {
                // Simpan data ke tabel Pesertas
                $peserta = new Peserta();
                $peserta->uuid = Str::uuid();
                $peserta->nama = $row['nama'];
                $peserta->phone_number = $row['phone_number'];
                $peserta->jenis_peserta = 'AKHWAT';
                $peserta->periode_id = $this->periode_id;
                $peserta->unit_id = $this->unit_id;
                $peserta->save();

                // Simpan data ke tabel Kelas
                $kelas = new Kelas();
                $kelas->uuid = Str::uuid();
                $kelas->peserta_id = $peserta->id;
                $kelas->jadwal_id = $this->jadwal_id;
                $kelas->periode_id = $this->periode_id;
                $kelas->status_aktif = 'AKTIF';
                $kelas->data_pembayaran = [
                    'pendaftaran' => $row['pendaftaran'],
                    'spp1'        => $row['spp1'],
                    'spp2'        => $row['spp2'],
                    'spp3'        => $row['spp3'],
                    'spp4'        => $row['spp4'],
                ];
                $kelas->data_absensi = [
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
                    ];
                $kelas->data_nilai = [
                        'ujian' => '',
                    ];
                $kelas->save();

                $transaksi = new Transaksi();
                $transaksi->uuid = Str::uuid();
                $transaksi->peserta_id = $peserta->id;
                $transaksi->periode_id = $this->periode_id;
                $transaksi->status = 'LUNAS'; // lunas
                $nominal_total = $row['pendaftaran'] + $row['spp1'] + $row['spp2'] + $row['spp3'] + $row['spp4'];
                $transaksi->nominal_total = $nominal_total;
                $transaksi->nominal_total_pembayaran = $nominal_total;

                $detailPembayaran = $transaksi->detail_pembayaran ?? [];
                $detailPembayaran['metode_transaksi'] = 'upload manual excel';
                $listPembayaran = $detailPembayaran['list_pembayaran'] ?? [];

                if ($row['pendaftaran'] > 0) { $listPembayaran[] = ['label' => 'Pendaftaran', 'key' => 'pendaftaran', 'value' => $row['pendaftaran']]; }
                if ($row['spp1'] > 0) { $listPembayaran[] = ['label' => 'SPP 1', 'key' => 'spp1', 'value' => $row['spp1']]; }
                if ($row['spp2'] > 0) { $listPembayaran[] = ['label' => 'SPP 2', 'key' => 'spp2', 'value' => $row['spp2']]; }
                if ($row['spp3'] > 0) { $listPembayaran[] = ['label' => 'SPP 3', 'key' => 'spp3', 'value' => $row['spp3']]; }
                if ($row['spp4'] > 0) { $listPembayaran[] = ['label' => 'SPP 4', 'key' => 'spp4', 'value' => $row['spp4']]; }

                $detailPembayaran['list_pembayaran'] = $listPembayaran;
                $transaksi->detail_pembayaran = $detailPembayaran;

                $transaksi->save();

                $this->successCount++;
            // } catch (\Exception $e) {
            //     // Catat data yang gagal beserta pesan errornya
            //     $this->failCount++;
            //     $this->failures[] = [
            //         'row' => $row,
            //         'error' => $e->getMessage(),
            //     ];

            //     // Log error untuk debugging
            //     Log::error('Error importing row: ' . $e->getMessage(), [
            //         'row' => $row,
            //     ]);
            // }
        }
    }

    public function getSuccessCount()
    {
        return $this->successCount;
    }

    public function getFailCount()
    {
        return $this->failCount;
    }

    public function getFailures()
    {
        return $this->failures;
    }
}
