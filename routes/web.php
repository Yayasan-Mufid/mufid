<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard');

        Route::get('/data', function () {
            return view('dashboard.peserta.data');
        })->middleware(['verified'])->name('data');

        Route::get('/pembayaran', function () {
          return view('dashboard.peserta.pembayaran');
      })->middleware(['verified'])->name('pembayaran');

        Route::get('/kelas', function () {
          return view('dashboard.peserta.kelas');
        })->name('kelas');

        Route::get('/sertifikat', function () {
          return view('dashboard.peserta.sertifikat');
        })->name('sertifikat');

        Route::get('/buat-materi', function () {
          return view('dashboard.pengajar.materi');
        });

        Route::get('/program-pendidikan', function () {
          return view('pages.program-pendidikan');
        })->name('program.pendidikan');

        Route::get('/program-pendidikan/daftar', function () {
          return view('pages.daftar-program.daftar');
        })->name('program.pendidikan.daftar');

        Route::get('/program-pendidikan/pembayaran', function () {
          return view('pages.daftar-program.pembayaran');
        })->name('program.pendidikan.pembayaran');

        Route::get('/program-pendidikan/selesai', function () {
          return view('pages.daftar-program.selesai');
        })->name('program.pendidikan.selesai');

        Route::get('/informasi', function () {
          return view('pages.informasi');
        })->name('informasi');

        Route::get('/list-peserta', function () {
          return view('components.data.list-peserta');
        })->name('list.peserta');


        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});
