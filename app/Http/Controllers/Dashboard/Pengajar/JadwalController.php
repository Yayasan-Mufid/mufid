<?php

namespace App\Http\Controllers\Dashboard\Pengajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;


class JadwalController extends Controller
{
    public function index($unit)
    {
        $data_jadwal = \App\Models\Jadwal::whereHas('pengajar.user', function($query) {
                            $query->where('id', auth()->user()->id);
                        })
                        ->whereHas('periode.unit', function($query) use ($unit) {
                            $query->where('slug', $unit);
                        })
                        ->with(['periode' => function($query) {
                            $query->latest();
                        }])
                        ->get();
        // dd($data_jadwal);
        return view('dashboard.pengajar.jadwal.index', compact('unit', 'data_jadwal'));
    }

    public function show($unit, $jadwal)
    {
        $jadwal = \App\Models\Jadwal::with('periode.unit')->findOrFail($jadwal);
        $pesertas = \ProtoneMedia\Splade\SpladeTable::
                                for(\App\Models\Kelas::where('jadwal_id', $jadwal->id)->get())
                                ->column('peserta.nama')
                                ;
        return view('dashboard.pengajar.jadwal.show', compact('unit', 'jadwal', 'pesertas'));
    }

    public function absensi($unit, $jadwal )
    {
        $jadwal = \App\Models\Jadwal::with('periode.unit')->findOrFail($jadwal);
        $pesertas = \App\Models\Kelas::where('jadwal_id', $jadwal->id)->get();
        $absenke = request()->get('absenke');
        return view('dashboard.pengajar.jadwal.absensi', compact('unit', 'jadwal', 'pesertas','absenke'));
    }

    public function absensi_update(Request $request, $unit, $jadwal, $absenke)
    {
        $jadwal = \App\Models\Jadwal::with('periode.unit')->findOrFail($jadwal);
        $pesertas = \App\Models\Kelas::where('jadwal_id', $jadwal->id)->get();

        // dd($request->all());

        try {

            foreach ($pesertas as $peserta) {
                $peserta = \App\Models\Kelas::findOrFail($peserta->id);
                $data_absensi = $peserta->data_absensi;
                $data_absensi[$absenke] = $request->input("keterangan{$peserta->id}");
                $peserta->data_absensi = $data_absensi;
                $peserta->save();
            }

        Toast::message('Data berhasil di tambahkan')->autoDismiss(5);
        } catch (\Exception $e) {
            Toast::warning('Terjadi kesalahan, data gagal disimpan')->autoDismiss(5);
        }

        return redirect()->route('pengajar.jadwal.show', ['unit' => $unit, 'jadwal' => $jadwal->id]);
    }
}
