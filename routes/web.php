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
