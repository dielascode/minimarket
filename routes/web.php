<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminMiddleware;

// Route::get('/', function () {
//     return '<h1>Selamat Datang di Dashboard Minimarket</h1>';
// });
Route::get('/produk/{id}', function ($id) {
    return 'Menampilkan data produk dengan ID: ' . $id;
});
Route::get('/produk/cari/{nama?}', function ($nama = null) {
    if ($nama) {
        return 'Hasil pencarian produk: ' . $nama;
    }
    return 'Silakan masukkan kata kunci pencarian pada URL
    (contoh: /produk/cari/sabun)';
});
// Route::get('/', function () {
//     return view('auth/login');
// });
Route::get('/', function () {
    return view('dashboard',['name' => 'PRABOWO', 'shift' => '24 Jam']);
});

Route::post('/loginproses', [AuthController::class, 'login']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('admin.dashboard');

    Route::get('/produk', function () {
        return "Halaman kelola produk (HANYA ADMIN)";
    })->name('admin.produk');

    Route::get('/kategori', function () {
        return 'Halaman Kelola Kategori Produk (Hanya Admin)';
    })->name('admin.kategori');
});

Route::prefix('kasir')->group(function () {
    Route::get('/transaksi', function () {
        return 'Halaman Input Transaksi Penjualan (Kasir)';
    })->name('kasir.transaksi');
});

Route::prefix('umum')->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('umum.dashboard');
});











// Route::get('/posts', [PostController::class, 'index']);
