<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('/movies', [\App\Http\Controllers\MovieController::class,'index'])->name('movies.index');
Route::get('/movies/{id}', [\App\Http\Controllers\MovieController::class,'show'])->name('movies.show');

