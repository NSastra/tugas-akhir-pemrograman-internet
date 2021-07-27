<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PinjamanController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/pinjaman/tambah', [PinjamanController::class, 'index']);
Route::post('pinjaman/store', [PinjamanController::class, 'store']);
Route::get('/pinjaman/daftar', [PinjamanController::class, 'daftarpjm']);
Route::delete('/pinjaman/{id}', [PinjamanController::class, 'destroy']);

Route::get('/kategori', [KategoriController::class, 'index']);

