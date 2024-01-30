<?php

use App\Http\Controllers\about_controller;
use App\Http\Controllers\profile_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('utils_client.layout');
});

Route::get('/about', [about_controller::class, 'index'])->name('about');