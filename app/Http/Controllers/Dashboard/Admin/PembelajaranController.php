<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembelajaran;

class PembelajaranController extends Controller
{
    public function index($unit)
    {
        $pembelajarans = Pembelajaran::paginate(10);
        return view('dashboard.admin.pembelajaran.index', compact('unit','pembelajarans'));
    }

    public function create($unit)
    {
        return view('dashboard.admin.pembelajaran.create', compact('unit'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Pembelajaran::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.pembelajaran.index', $request->unit);
    }

    public function show($unit, $id)
    {
        $pembelajaran = Pembelajaran::findOrFail($id);
        return view('dashboard.admin.pembelajaran.show', compact('unit','pembelajaran'));
    }

    public function edit($unit, $id)
    {
        $pembelajaran = Pembelajaran::findOrFail($id);
        return view('dashboard.admin.pembelajaran.edit', compact('unit','pembelajaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $pembelajaran = Pembelajaran::findOrFail($id);
        $pembelajaran->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.pembelajaran.index', $request->unit);
    }

    public function destroy($unit, $id)
    {
        $pembelajaran = Pembelajaran::findOrFail($id);
        $pembelajaran->delete();
        return redirect()->route('admin.pembelajaran.index', $unit);
    }


}
