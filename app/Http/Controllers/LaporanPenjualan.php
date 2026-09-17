<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualan extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $judul = "Laporan Penjualan";
        $daftar_terjual = [
            ['id'=>1, 'nama'=>'Laptop Thinkpad', 'harga'=>12500000],
            ['id'=>2, 'nama'=>'Mouse Wireless', 'harga'=>25000],
            ['id'=>3, 'nama'=>'Keyboard', 'harga'=>85000],
        ];
        return view('laporan_penjualan.index', compact('judul', 'daftar_terjual'));
    }
}
