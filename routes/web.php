<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegulerController;
use App\Http\Controllers\MassalController;
use App\Http\Controllers\RiwayatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', [ProdukController::class, 'show'])->name('produk');
Route::get('/catreg', [RegulerController::class, 'show'])->name('catatan_reguler');
Route::get('/catmas', [MassalController::class, 'show'])->name('catatan_massal');
Route::get('/riwayat', [RiwayatController::class, 'show'])->name('riwayat');

Route::get('/', function () {
    return redirect()->route('register');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');