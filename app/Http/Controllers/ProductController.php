<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return $data;
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $namaGambar = time() . '.' . $gambar->getClientOriginalExtension(); //biar seformat

        $gambar->move(public_path('images'), $namaGambar); //naro di public/images

        try{
                Product::create([
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'qty' => $request->qty,
                'harga' => $request->harga,
                'gambar' => $namaGambar, //cuma nama yang d taro sini
            ]);
        }catch(Exception $e){
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }



        return redirect()->route('admin.produk-toko');
    }
}
