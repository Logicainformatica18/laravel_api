<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/tasks',);
//Route::resource('tasks', App\Http\Controllers\TaskController::class);