<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EloquentController;
use App\Http\Controllers\EloquentPart2Controller;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LaporanPenjualan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QueryController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return '<h1>Selamat Datang di Dashboard Minimarket</h1>';
// });
// Route::get('/produk/{id}', function ($id) {
//     return 'Menampilkan data produk dengan ID: ' . $id;
// });
// Route::get('/produk/cari/{nama?}', function ($nama = null) {
//     if ($nama) {
//         return 'Hasil pencarian produk: ' . $nama;
//     }
//     return 'Silakan masukkan kata kunci pencarian pada URL
//     (contoh: /produk/cari/sabun)';
// });

// Route::get('/', function () {
//     return view('dashboard', ['name' => 'PRABOWO', 'shift' => '24 Jam']);
// });
// Route::get('/produk-toko', function () {
//     $produk= [
//         [
//             'no' => 1,
//             'nama' => 'sawit',
//             'sku' => 'BR3777673',
//             'harga' => 1200000,
//             'stok' => 1000,
//             'gambar' => 'sawit.jpg'
//         ],
//         [
//             'no' => 2,
//             'nama' => 'buku islam ala prabowo',
//             'sku' => 'BR3777674', 'harga' => 30000,
//             'stok' => 7000,
//             'gambar' => 'islam.jpg'
//         ],
//         [
//             'no' => 3,
//             'nama' => 'MBG',
//             'sku' => 'BR3777675',
//             'harga' => 1200000,
//             'stok' => 1000000,
//             'gambar' => 'mbg.jpg'
//         ],
//         [
//             'no' => 4,
//             'nama' => '74 KG Emas',
//             'sku' => 'BR3777676',
//             'harga' => 1200000000,
//             'stok' => 1,
//             'gambar' => 'emas.jpg'
//         ]
//     ];

//     return view('daftar_produk', ['produk'=>$produk]);
// });


// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         $user = Auth::user();
//         return view('dashboard', ['user' => $user]);
//     })->name('admin.dashboard');

//     // Route::get('/produk', function () {
//     //     return "Halaman kelola produk (HANYA ADMIN)";
//     // })->name('admin.produk');

//     // Route::get('/kategori', function () {
//     //     return 'Halaman Kelola Kategori Produk (Hanya Admin)';
//     // })->name('admin.kategori');


//     // Route::get('/produk-toko', [ProductController::class, 'index'])->name('admin.produk-toko');

//     // Route::get('/tambah-produk', [ProductController::class, 'create'])->name('admin.tambahproduk');

//     // Route::post('/tambahprodukproses', [ProductController::class, 'store'])->name('admin.tambahprodukproses');

//     // Route::get('/edit-produk/{id}', [ProductController::class, 'edit'])->name('admin.editproduk');

//     // Route::put('/editprodukproses/{id}', [ProductController::class, 'update'])->name('admin.editprodukproses');

//     // Route::delete('/hapus-produk/{id}', [ProductController::class, 'destroy'])->name('admin.hapusprosesproduk');

// });

// Route::prefix('kasir')->group(function () {
//     Route::get('/transaksi', function () {
//         return 'Halaman Input Transaksi Penjualan (Kasir)';
//     })->name('kasir.transaksi');
// });

// Route::prefix('umum')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('welcome');
//     })->name('umum.dashboard');
// });

// Route::get('/laporan_penjualan', [LaporanPenjualan::class, '__invoke']);




// Route::get('/detail_penjualan/{id}', [LaporanPenjualan::class, 'show']);



//acara 17
// Route::get('/insertData', [QueryController::class, 'insertData']);
// Route::get('/insertGetId', [QueryController::class, 'insertGetId']);
// Route::get('/getData', [QueryController::class, 'getData']);
// Route::get('/getDataWhere', [QueryController::class, 'getDataWhere']);
// Route::get('/getDataColumn', [QueryController::class, 'getDataColumn']);
// Route::get('/getDataMany', [QueryController::class, 'getDataManyWhere']);
// Route::get('/getDataOperator', [QueryController::class, 'getDataOperator']);
// Route::get('/increment', [QueryController::class, 'increment']);
// Route::get('/decrement', [QueryController::class, 'decrement']);
// Route::get('/destroyData', [QueryController::class, 'destroyData']);
// Route::get('/truncate', [QueryController::class, 'truncate']);
// Route::get('/pluckData', [QueryController::class, 'pluckData']);
// Route::get('/pluckDataKeyValue', [QueryController::class, 'pluckDataKeyValue']);
// Route::get('/countData', [QueryController::class, 'countData']);
// Route::get('/sumData', [QueryController::class, 'sumData']);
// Route::get('/avgData', [QueryController::class, 'avgData']);
// Route::get('/maxData', [QueryController::class, 'maxData']);
// Route::get('/minData', [QueryController::class, 'minData']);
// Route::get('/leftJoinData', [QueryController::class, 'leftJoinData']);
// Route::get('/joinData', [QueryController::class, 'joinData']);
// Route::get('/orderData', [QueryController::class, 'orderData']);
// Route::get('/limitData', [QueryController::class, 'limitData']);
// Route::get('/offsetData', [QueryController::class, 'offsetData']);
// Route::get('/subQueryData', [QueryController::class, 'subQueryData']);
// Route::get('/rawSelectData', [QueryController::class, 'rawSelectData']);
// Route::get('/rawWhereData', [QueryController::class, 'rawWhereData']);


// //acara 18
// Route::get('/eloquent/create', [EloquentController::class, 'createData']);
// Route::get('/eloquent/save', [EloquentController::class, 'saveData']);
// Route::get('/eloquent/getData', [EloquentController::class, 'getData']);
// Route::get('/eloquent/find', [EloquentController::class, 'getDataById']);
// Route::get('/eloquent/where', [EloquentController::class, 'getDataWhere']);
// Route::get('/eloquent/firstOrFail', [EloquentController::class, 'firstOrFail']);
// Route::get('/eloquent/update', [EloquentController::class, 'updateData']);
// Route::get('/eloquent/updateSave', [EloquentController::class, 'updateSave']);
// Route::get('/eloquent/delete', [EloquentController::class, 'deleteData']);
// Route::get('/eloquent/destroy', [EloquentController::class, 'destroyData']);

// //acara 19
// Route::get('/eloquent2/where', [EloquentPart2Controller::class, 'whereData']);
// Route::get('/eloquent2/orWhere', [EloquentPart2Controller::class, 'orWhereData']);
// Route::get('/eloquent2/whereBetween', [EloquentPart2Controller::class, 'whereBetweenData']);
// Route::get('/eloquent2/whereIn', [EloquentPart2Controller::class, 'whereInData']);
// Route::get('/eloquent2/whereNotNull', [EloquentPart2Controller::class, 'whereNotNullData']);
// Route::get('/eloquent2/when', [EloquentPart2Controller::class, 'whenData']);
// Route::get('/eloquent2/accessor', [EloquentPart2Controller::class, 'accessorData']);
// Route::get('/eloquent2/soft-delete', [EloquentPart2Controller::class, 'softDeleteData']);
// Route::get('/eloquent2/with-trashed', [EloquentPart2Controller::class, 'withTrashedData']);
// Route::get('/eloquent2/only-trashed', [EloquentPart2Controller::class, 'onlyTrashedData']);
// Route::get('/eloquent2/restore', [EloquentPart2Controller::class, 'restoreData']);



// Route::get('/form', [FormController::class, 'showForm']);
// Route::post('/submit', [FormController::class, 'submitForm']);

// Route::get('/posts', [PostController::class, 'index']);

// Route::get('/formv', [FormController::class, 'showFormV']);
// Route::post('/validasi', [FormController::class, 'validasiform']);

//acara 21
require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/loginproses', [AuthController::class, 'login']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('produk', ProductController::class)->except(['show']);
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
