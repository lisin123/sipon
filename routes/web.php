<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\KedatanganController;

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
    return view('contents.dashboard');
});

Route::get('/izin', [IzinController::class, 'index'])->name('izin');
Route::post('/izin', [IzinController::class, 'store'])->name('izin.store');
Route::post('/izin2', [IzinController::class, 'store2'])->name('izin.store2');
Route::delete('/izin', [IzinController::class, 'destroy'])->name('izin.destroy');
Route::put('/izin', [IzinController::class, 'update'])->name('izin.konfirmasi');

Route::get('/datang', [KedatanganController::class, 'index']);

Route::get('/rekap', function () {
    return view('contents.rekap');
});

Route::get('/libur', function () {
    return view('contents.libur');
});

Route::get('/pengaturan', function () {
    return view('contents.pengaturan');
});