<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('auth/login');
});

Route::post('/loginproses', [AuthController::class, 'login']);

// Route::prefix('admin')->middleware('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('halamanAdmin');
//     })->name('admin.dashboard');
// });
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('halamanAdmin');
    })->name('admin.dashboard');
});

Route::prefix('umum')->group(function () {
    Route::get('/dashboard', function () {
        return view('halamanUmum');
    })->name('umum.dashboard');
});











// Route::get('/posts', [PostController::class, 'index']);
