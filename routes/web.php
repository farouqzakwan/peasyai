<?php

use App\Http\Controllers\HomeController;
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
Route::get('/',                 [HomeController::class,'index'])->name('public.index.GET');
Route::get('/{uuid}',           [HomeController::class,'edit'])->name('public.edit.GET');
Route::post('/{uuid}',          [HomeController::class,'update'])->name('public.edit.POST');
Route::delete('/{uuid}',        [HomeController::class,'delete'])->name('public.remove.DELETE');
