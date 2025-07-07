<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MapelController;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::resource('Dosen', DosenController::class);
Route::resource('MataKuliah', MapelController::class);
