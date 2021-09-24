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

Route::GET('/',[LibretaController::class, 'index'])->name('index');
Route::GET('/create',[LibretaController::class, 'create'])->name('libreta.create');
Route::POST('/store',[LibretaController::class, 'store'])->name('libreta.store');
Route::GET('/{id}/edit',[LibretaController::class, 'edit'])->name('libreta.edit');
Route::PUT('/{libreta}/update',[LibretaController::class, 'update'])->name('libreta.update');
Route::DELETE('/{libreta}/delete',[LibretaController::class, 'destroy'])->name('libreta.destroy');
