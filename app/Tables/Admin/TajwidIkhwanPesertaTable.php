<?php

namespace App\Tables\Admin;

use App\Models\Kelas;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class TajwidIkhwanPesertaTable extends AbstractTable
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
            ->withGlobalSearch(columns: ['peserta.nama', 'jadwal.nama'])
            ->rowLink(fn (Kelas $kelas) => route('admin.pembayaran.peserta', ['unit' => 'tajwid-ikhwan', 'peserta' => $kelas->peserta->id],$kelas))
            ->column(label: 'Angkatan', key: 'periode.angkatan', sortable: true)
            ->column(label: 'Jadwal', key: 'jadwal.nama_jadwal', sortable: true)
            ->column(label: 'Pengajar', key: 'jadwal.pengajar.user.name', sortable: true)
            ->column(label: 'Peserta', key: 'peserta.nama', sortable: true)
            ->column(label: 'Nomor HP', key: 'peserta.phone_number')
            ->column(label: 'Status Penerimaan', key: 'status_penerimaan')
            ->column(label: 'Status Aktif', key: 'status_aktif')

            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction()
        ->paginate(15)

            ->export()
            ;
    }
}
