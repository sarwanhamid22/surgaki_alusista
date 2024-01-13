<?php

use App\Models\berita;
use App\Models\Alusista;
use App\Models\pelatihan;
use App\Models\riwayat_operasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlusistaController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\RiwayatOperasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('berita', BeritaController::class)->middleware(['auth']);
Route::resource('alusista', AlusistaController::class)->middleware(['auth']);
Route::resource('riwayat', RiwayatOperasiController::class)->middleware(['auth']);
Route::resource('pelatihan', PelatihanController::class)->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard', [
        'jumlahAlusista' => Alusista::count(),
        'jumlahPelatihan' => pelatihan::count(),
        'jumlahOperasi' => riwayat_operasi::count(),
        'jumlahBerita' => berita::count()

    ]);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
