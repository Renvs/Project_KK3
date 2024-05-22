<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'db']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);

Route::get('/pwpb24', [SiswaController::class, 'index1']);

Route::get('/Hello-World', [SiswaController::class, 'index2']);

Route::get('/kelas', [KelasController::class, 'index' ]);
Route::get('/kelas/create', [KelasController::class, 'create']);
Route::post('/kelas', [KelasController::class, 'store']);




