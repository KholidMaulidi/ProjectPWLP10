<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

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

Route::resource('mahasiswas', MahasiswaController::class);
Route::get('mahasiswas/khs/{nim}', [MahasiswaController::class, 'khs'])->name('mahasiswas.khs');
Route::get('/cetak/{nim}', 'App\Http\Controllers\MahasiswaController@cetak')->name('cetak');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
