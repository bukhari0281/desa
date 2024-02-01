<?php

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\blog_controller;
use App\Http\Controllers\category_controller;
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

Route::get('/profil', [profile_controller::class, 'index'])->name('profil');

Route::prefix('admin')->name('admin.')->group(function () {
});
Route::get('/admin', [admin_controller::class, 'index'])->name('admin');
Route::get('/blog', [blog_controller::class, 'index'])->name('blog');
Route::resource('/categories', category_controller::class)->only(['index','store', 'update', 'destroy']);

