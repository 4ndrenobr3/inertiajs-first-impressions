<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaController;

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

Route::get('/', [SpaController::class, 'index'])->name('home');
Route::get('/login', [SpaController::class, 'showLoginForm'])->name('show-login');
Route::post('/login', [SpaController::class, 'login'])->name('login');
Route::get('/dashboard', [SpaController::class, 'dashboard'])->name('dashboard');
