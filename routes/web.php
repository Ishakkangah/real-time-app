<?php

use App\Events\ServerCreated;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-broadcast-event', function () {
    ServerCreated::dispatch('parameter atribut message | sangcahaya.id');
    echo 'test broadcast event sangcahaya.id';
});


Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan/create', [KaryawanController::class, 'store']);
