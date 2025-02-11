<?php

namespace App\Tables\Admin;

use App\Models\Periode;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class TajwidAkhwatPeriodeTable extends AbstractTable
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
        return Periode::where('unit_id', 3)->orderBy('created_at', 'desc');
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
        ->withGlobalSearch(columns: ['nama'])
        ->rowLink(fn (Periode $periode) => route('admin.periode.show', ['unit' => 'tajwid-akhwat', 'periode' => $periode->id],$periode))
        ->column('id', sortable: true)
        ->column('nama')
        ->column('tahun_ajaran')
        ->column(
            label:'Buka Pendaftaran',
            key:'waktu_start'
        )
        ->column(
                label:'Tutup Pendaftaran',
                key:'waktu_end'
        )

        // ->searchInput()
        // ->selectFilter()
        // ->withGlobalSearch()

        // ->bulkAction()
        // ->export()
        ->paginate(15);
    }
}
