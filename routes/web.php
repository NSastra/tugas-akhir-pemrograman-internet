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

Route::resources([
    '/pinjaman' => PinjamanController::class,
    '/kategori' => KategoriController::class,
]);

Route::get('/kategori/tambahdata/{kategori}', [KategoriController::class, 'tambahdata']);
Route::put('/kategori/tambahdata/{kategori}', [KategoriController::class, 'updatedata']);
Route::put('/kategori/hapus/{kategori}', [KategoriController::class, 'hapusdata']);


