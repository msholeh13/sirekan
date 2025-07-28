<?php

use App\Http\Controllers\Api\FoodAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::apiResource('datas', FoodAPIController::class);
Route::get('/datas', [FoodAPIController::class, 'index'])->name('datas.index');
Route::get('/datas/{id}', [FoodAPIController::class, 'show'])->name('datas.show');
Route::get('/max-values', [FoodAPIController::class, 'getMaxValues'])->name('data.getMaxValues');
Route::get('/weights', [FoodAPIController::class, 'getWeights'])->name('data.weights');
