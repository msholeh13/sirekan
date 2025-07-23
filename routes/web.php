<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\WeightController;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/data', [DataController::class, 'index'])->name('data');
Route::post('tambah-data', [DataController::class, 'create'])->name('data.add');
Route::get('hapus-data/{id}', [DataController::class, 'delete'])->name('data.delete');
Route::put('ubah-data/{id}', [DataController::class, 'update'])->name('data.update');
Route::get('/bobot', [WeightController::class, 'index'])->name('weight');
Route::post('/ubah-bobot', [WeightController::class, 'update'])->name('weight.update');
