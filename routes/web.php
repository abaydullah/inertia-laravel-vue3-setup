<?php

use App\Http\Controllers\PostIndexController;
use App\Http\Controllers\PostStoreController;
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

//Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
//Route::get('/admin/dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');
Route::get('/',PostIndexController::class);
Route::post('/posts',PostStoreController::class)->name('posts.store');
