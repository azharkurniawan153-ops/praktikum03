<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return redirect()->route('laporan.form');
});

Route::get('/lapor', [LaporanController::class, 'form'])
    ->name('laporan.form');

Route::post('/lapor', [LaporanController::class, 'store'])
    ->name('laporan.store');

Route::get('/laporan', [LaporanController::class, 'index'])
    ->name('laporan.index');