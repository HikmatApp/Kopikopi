<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StokBarangController;

/*
|--------------------------------------------------------------------------
| WELCOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| DASHBOARD USER
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    /*
    |--------------------------
    | ADMIN DASHBOARD
    |--------------------------
    */
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    /*
    |--------------------------
    | MITRA MANAGEMENT
    | READ + DETAIL + TOGGLE + DELETE
    |--------------------------
    */

    // LIST MITRA
    Route::get('/mitra', [AdminController::class, 'mitra'])
        ->name('mitra.index');

    // DETAIL MITRA
    Route::get('/mitra/{id}', [AdminController::class, 'showMitra'])
        ->name('mitra.show');

    // TOGGLE AKTIF / NONAKTIF
    Route::patch('/mitra/{id}/toggle', [AdminController::class, 'toggleMitra'])
        ->name('mitra.toggle');

    // DELETE MITRA
    Route::delete('/mitra/{id}', [AdminController::class, 'deleteMitra'])
        ->name('mitra.delete');

    /*
    |--------------------------
    | STOK BARANG (CRUD RESOURCE)
    |--------------------------
    */
    Route::resource('stok', StokBarangController::class);

    /*
    |--------------------------
    | TRANSAKSI
    |--------------------------
    */
    Route::get('/transaksi', function () {
        return view('admin.transaksi');
    })->name('transaksi');
});

/*
|--------------------------------------------------------------------------
| PROFILE USER
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';
