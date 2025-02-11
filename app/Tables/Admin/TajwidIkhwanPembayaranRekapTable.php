<?php

namespace App\Tables\Admin;

use App\Models\Kelas;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class TajwidIkhwanPembayaranRekapTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Kelas::whereHas('periode.unit', function ($query) {
            $query->where('id', 2);
        })->orderBy('created_at', 'desc');
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['peserta.nama'])
            ->rowLink(fn (Kelas $kelas) => route('admin.pembayaran.peserta', ['unit' => 'tajwid-ikhwan', 'peserta' => $kelas->peserta->id],$kelas))
            ->column(label: 'Angkatan', key: 'periode.angkatan', sortable: true)
            ->column(label: 'Peserta', key: 'peserta.nama', sortable: true)
            ->column(label: 'Nomor HP', key: 'peserta.phone_number')
            ->column(label: 'Pendaftaran', key: 'nominal_pendaftaran', as: fn(Kelas $kelas = null) => 'Rp ' . number_format($kelas?->data_pembayaran['pendaftaran'] ?? 0, 0, ',', '.'), )
            ->column(label: 'SPP 1', key: 'nominal_spp1', as: fn(Kelas $kelas = null) => 'Rp ' . number_format($kelas?->data_pembayaran['spp1'] ?? 0, 0, ',', '.'), )
            ->column(label: 'SPP 2', key: 'nominal_spp2', as: fn(Kelas $kelas = null) => 'Rp ' . number_format($kelas?->data_pembayaran['spp2'] ?? 0, 0, ',', '.'), )
            ->column(label: 'SPP 3', key: 'nominal_spp3', as: fn(Kelas $kelas = null) => 'Rp ' . number_format($kelas?->data_pembayaran['spp3'] ?? 0, 0, ',', '.'), )
            ->column(label: 'SPP 4', key: 'nominal_spp4', as: fn(Kelas $kelas = null) => 'Rp ' . number_format($kelas?->data_pembayaran['spp4'] ?? 0, 0, ',', '.'), )
            ->column(label: 'TOTAL', key: 'nominal_total', as: fn(Kelas $kelas = null) =>
                'Rp ' . number_format(
                    ($kelas?->data_pembayaran['pendaftaran'] ?? 0) +
                    ($kelas?->data_pembayaran['spp1'] ?? 0) +
                    ($kelas?->data_pembayaran['spp2'] ?? 0) +
                    ($kelas?->data_pembayaran['spp3'] ?? 0) +
                    ($kelas?->data_pembayaran['spp4'] ?? 0),
                    0, ',', '.'
                )
            )


            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction()
            ->paginate(15)

            ->export()
            ;
    }
}
