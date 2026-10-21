
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorController;

use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin.dashboard');


Route::get('/', [HomeController::class, 'index']);

Route::get('/movies', [MovieController::class, 'index'])
    ->name('movies.index');
Route::get('/dashboard', fn () => view('admin.dashboard'));
Route::get('/chart', fn () => view('admin.chart'));
Route::get('/movie', fn () => view('admin.movie'));
Route::get('/product', fn () => view('admin.product'));