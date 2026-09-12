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
    return view('dashboard', ['name' => 'PRABOWO', 'shift' => '24 Jam']);
});
Route::get('/produk-toko', function () {
    $produk= [
        [
            'no' => 1,
            'nama' => 'sawit',
            'sku' => 'BR3777673',
            'harga' => 1200000,
            'stok' => 1000,
            'gambar' => 'sawit.jpg'
        ],
        [
            'no' => 2,
            'nama' => 'buku islam ala prabowo',
            'sku' => 'BR3777674', 'harga' => 30000,
            'stok' => 7000,
            'gambar' => 'islam.jpg'
        ],
        [
            'no' => 3,
            'nama' => 'MBG',
            'sku' => 'BR3777675',
            'harga' => 1200000,
            'stok' => 1000000,
            'gambar' => 'mbg.jpg'
        ],
        [
            'no' => 4,
            'nama' => '74 KG Emas',
            'sku' => 'BR3777676',
            'harga' => 1200000000,
            'stok' => 1,
            'gambar' => 'emas.jpg'
        ]
    ];

    return view('daftar_produk', ['produk'=>$produk]);
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
