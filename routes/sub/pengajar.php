<?php

use App\Http\Controllers\Dashboard\Pengajar\DashboardController;
use App\Http\Controllers\Dashboard\Pengajar\PembelajaranController;
use App\Http\Controllers\Dashboard\Pengajar\PengajarController;
use App\Http\Controllers\Dashboard\Pengajar\PesertaController;
use App\Http\Controllers\Dashboard\Pengajar\JadwalController;
use Illuminate\Support\Facades\Route;

Route::prefix('/pengajar/{unit}')->middleware('role:mia-pengajar')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('pengajar.dashboard');

    Route::get('/pembelajaran', [PembelajaranController::class, 'index'])->name('pengajar.pembelajaran.index');
    // Route::get('/pembelajaran/create', [PembelajaranController::class, 'create'])->name('pengajar.pembelajaran.create');
    // Route::post('/pembelajaran', [PembelajaranController::class, 'store'])->name('pengajar.pembelajaran.store');
    // Route::get('/pembelajaran/{pembelajaran}', [PembelajaranController::class, 'show'])->name('pengajar.pembelajaran.show');
    // Route::get('/pembelajaran/{pembelajaran}/edit', [PembelajaranController::class, 'edit'])->name('pengajar.pembelajaran.edit');
    // Route::put('/pembelajaran/{pembelajaran}', [PembelajaranController::class, 'update'])->name('pengajar.pembelajaran.update');
    // Route::delete('/pembelajaran/{pembelajaran}', [PembelajaranController::class, 'destroy'])->name('pengajar.pembelajaran.destroy');


    Route::get('/jadwal', [JadwalController::class, 'index'])->name('pengajar.jadwal.index');
    // Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('pengajar.jadwal.create');
    // Route::post('/jadwal', [JadwalController::class, 'store'])->name('pengajar.jadwal.store');
    // Route::get('/jadwal/{jadwal}', [JadwalController::class, 'show'])->name('pengajar.jadwal.show');
    // Route::get('/jadwal/{jadwal}/edit', [JadwalController::class, 'edit'])->name('pengajar.jadwal.edit');
    // Route::put('/jadwal/{jadwal}', [JadwalController::class, 'update'])->name('pengajar.jadwal.update');
    // Route::delete('/jadwal/{jadwal}', [JadwalController::class, 'destroy'])->name('pengajar.jadwal.destroy');

    Route::get('/pengajar', [PengajarController::class, 'index'])->name('pengajar.pengajar.index');
    // Route::get('/pengajar/create', [PengajarController::class, 'create'])->name('pengajar.pengajar.create');
    // Route::post('/pengajar', [PengajarController::class, 'store'])->name('pengajar.pengajar.store');
    // Route::get('/pengajar/{pengajar}', [PengajarController::class, 'show'])->name('pengajar.pengajar.show');
    // Route::get('/pengajar/{pengajar}/edit', [PengajarController::class, 'edit'])->name('pengajar.pengajar.edit');
    // Route::put('/pengajar/{pengajar}', [PengajarController::class, 'update'])->name('pengajar.pengajar.update');
    // Route::delete('/pengajar/{pengajar}', [PengajarController::class, 'destroy'])->name('pengajar.pengajar.destroy');

    Route::get('/peserta', [PesertaController::class, 'index'])->name('pengajar.peserta.index');
    // Route::get('/peserta/create', [PesertaController::class, 'create'])->name('pengajar.peserta.create');
    // Route::post('/peserta', [PesertaController::class, 'store'])->name('pengajar.peserta.store');
    // Route::get('/peserta/{peserta}', [PesertaController::class, 'show'])->name('pengajar.peserta.show');
    // Route::get('/peserta/{peserta}/edit', [PesertaController::class, 'edit'])->name('pengajar.peserta.edit');
    // Route::put('/peserta/{peserta}', [PesertaController::class, 'update'])->name('pengajar.peserta.update');
    // Route::delete('/peserta/{peserta}', [PesertaController::class, 'destroy'])->name('pengajar.peserta.destroy');

    // Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengajar.pengaturan.index');
    // Route::get('/pengaturan/create', [PengaturanController::class, 'create'])->name('pengajar.pengaturan.create');
    // Route::post('/pengaturan', [PengaturanController::class, 'store'])->name('pengajar.pengaturan.store');
    // Route::get('/pengaturan/{pengaturan}', [PengaturanController::class, 'show'])->name('pengajar.pengaturan.show');
    // Route::get('/pengaturan/{pengaturan}/edit', [PengaturanController::class, 'edit'])->name('pengajar.pengaturan.edit');
    // Route::put('/pengaturan/{pengaturan}', [PengaturanController::class, 'update'])->name('pengajar.pengaturan.update');
    // Route::delete('/pengaturan/{pengaturan}', [PengaturanController::class, 'destroy'])->name('pengajar.pengaturan.destroy');

});
