<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IzinController;

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

Route::get('/izin', [IzinController::class, 'index']);

Route::get('/datang', function () {
    return view('contents.datang');
});

Route::get('/rekap', function () {
    return view('contents.rekap');
});

Route::get('/libur', function () {
    return view('contents.libur');
});

Route::get('/pengaturan', function () {
    return view('contents.pengaturan');
});