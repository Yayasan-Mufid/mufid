<?php

namespace App\Tables\Admin;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class TajwidAkhwatPembayaranTransaksiTable extends AbstractTable
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
        return Transaksi::whereHas('periode.unit', function ($query) {
            $query->where('id', 3);
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
        // ->searchInput(
        //     key: 'peserta.nama',
        //     label: 'Cari Nama',
        // )
        // ->rowLink(fn (Transaksi $transaksi) => route('admin.pembayaran.peserta', ['unit' => 'tajwid-ikhwan', 'peserta' => $transaksi->peserta->id],$transaksi))
        ->column(label: 'Actions')
        ->column(label: 'Peserta', key: 'peserta.nama')
        ->column(label: 'Nomor HP', key: 'peserta.phone_number')
        ->column(label: 'Status', key: 'status')
        ->column(label: 'Kode Unik', key: 'kode_unik')
        ->column(label: 'Nominal', key: 'fun_nominal_total', as: function (Transaksi $transaksi = null) {
            return 'Rp. ' . number_format($transaksi->nominal_total, 0, ',', '.');
        })
        ->column(label: 'Total', key: 'fun_nominal_total_pembayaran', as: function (Transaksi $transaksi = null) {
            return 'Rp. ' . number_format($transaksi->nominal_total_pembayaran, 0, ',', '.');
        })
        ->column(label: 'Angkatan', key: 'periode.angkatan')
        ->column(label: 'Jadwal', key: 'periode.jadwal.nama_jadwal')
        ->column(label: 'Pengajar', key: 'periode.jadwal.pengajar.user.name')
        ->column(label: 'Waktu', key: 'created_at')

        // ->searchInput()
        // ->selectFilter()
        // ->withGlobalSearch()

        // ->bulkAction(label: 'Touch timestamp's,)
        ->paginate(15)

        ->export()
        ;
    }
}
