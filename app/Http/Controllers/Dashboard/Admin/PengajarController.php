<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ProtoneMedia\Splade\Facades\Toast;

class PengajarController extends Controller
{
    public function index($unit)
    {
        $table = $this->getPengajarTable($unit);
        return view('dashboard.admin.pengajar.index', compact('unit', 'table'));
    }

    public function create($unit)
    {
        $table = $this->getPengajarTable($unit);
        $pengajars = \App\Models\User::select('id', 'name')->get();
        return view('dashboard.admin.pengajar.create', compact('unit', 'table', 'pengajars'));
    }

    public function store(Request $request, $unit)
    {
        $id_unit = \App\Models\Unit::where('slug', $unit)->first()->id;
        $errors = [];
        DB::beginTransaction();
        try {
            $pengajars = $request->pengajars;
            foreach ($pengajars as $pengajarId) {
                $pengajar = \App\Models\Pengajar::where('user_id', $pengajarId)->where('unit_id', $id_unit)->first();
                if ($pengajar) {
                    $user = \App\Models\User::find($pengajarId);
                    $errors[] = "User dengan nama $user->name sudah terdaftar sebagai pengajar di unit $unit";
                    continue;
                }
                \App\Models\Pengajar::create(['user_id' => $pengajarId, 'unit_id' => $id_unit]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Toast::warning('Terjadi kesalahan, data gagal di tambahkan')->autoDismiss(5);
        }

        if (count($errors) > 0) {
            $msg = implode('<br>', $errors);
            Toast::warning($msg)->autoDismiss(5);
        } else {
            Toast::message('Data berhasil di tambahkan')->autoDismiss(10);
        }

        return redirect()->route('admin.pengajar.index', $unit);
    }

    private function getPengajarTable($unit)
    {
        return match ($unit) {
            'tajwid-ikhwan' => new \App\Tables\Admin\TajwidIkhwanPengajarTable(),
            'tajwid-akhwat' => new \App\Tables\Admin\TajwidAkhwatPengajarTable(),
            default => new \App\Tables\Admin\MiaPengajarTable(),
        };
    }
}
