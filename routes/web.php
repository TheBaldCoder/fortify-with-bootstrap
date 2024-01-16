<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::resource('jobs', JobController::class);
Route::resource('employees', EmployeeController::class);
