<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_sensor1;
use App\Http\Controllers\controller_sensor2;


Route::view('/', 'index');

Route::view('student','about');

Route::view('video','video');

Route::get('sensor1',[controller_sensor1::class, 'index']);

Route::get('sensor2',[controller_sensor2::class, 'index']);