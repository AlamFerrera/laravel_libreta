<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibretaController;
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

Route::get('/',[LibretaController::class, 'index'])->name('index');
Route::get('/create',[LibretaController::class, 'create'])->name('libreta.create');
Route::POST('/store',[LibretaController::class, 'store'])->name('libreta.store');
