<?php

use App\Events\ServerCreated;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-broadcast-event', function () {
    ServerCreated::dispatch('parameter atribut message | sangcahaya.id');
    echo 'test broadcast event sangcahaya.id';
});
