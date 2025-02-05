<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    private function getLevelTable($unit)
    {
        return match ($unit) {
            'tajwid-ikhwan' => new \App\Tables\Admin\TajwidIkhwanLevelTable(),
            'tajwid-akhwat' => new \App\Tables\Admin\TajwidAkhwatLevelTable(),
            default => new \App\Tables\Admin\MiaLevelTable(),
        };
    }

    public function index($unit)
    {
        $table = $this->getLevelTable($unit);
        return view('dashboard.admin.level.index', compact('unit', 'table'));
    }

    public function create($unit)
    {
        $table = $this->getLevelTable($unit);
        return view('dashboard.admin.level.create', compact('unit', 'table'));
    }

    public function store(Request $request, $unit)
    {
        $validatedData = $request->validate([
            // Add your validation rules here
            // 'field_name' => 'required|string|max:255',
        ]);

        // Create a new level using the validated data
        $level = new \App\Models\Level($validatedData);
        $level->unit = $unit;
        $level->save();

        // Redirect back with a success message
        return redirect()->route('admin.level.index', ['unit' => $unit])
                        ->with('success', 'Level created successfully.');
    }

}
