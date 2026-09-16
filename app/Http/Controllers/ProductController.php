<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produk = Product::all();

        return view('produk.daftar_produk', ['produk' => $produk]);
    }

    public function create()
    {
        return view('produk.tambah_produk');
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

        try {
            Product::create([
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'qty' => $request->qty,
                'harga' => $request->harga,
                'gambar' => $namaGambar, //cuma nama yang d taro sini
            ]);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }



        return redirect()->route('admin.produk-toko');
    }

    public function edit($id)
    { //ngambil parameter id dari web.php
        $product = Product::findOrFail($id); //trus dicari disini
        return view('produk.edit_produk', compact('product')); //di comppact buat diteruskan ke vuiw
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', //nullabel kalo ga ada gambar gpp
        ]);

        $product = Product::findOrFail($id); //diambil dulu pake id yang sesuai

        $data = [ //data baru jg disimpen dari inputan
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'qty' => $request->qty,
            'harga' => $request->harga,
        ];

        // kalau milih gambar baru
        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');

            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            $gambar->move(public_path('images'), $namaGambar);

            $data['gambar'] = $namaGambar; //gambar lama bakal tetep ada si, SEMENTARA
        }

        $product->update($data); //nah ngapdet

        return redirect()->route('admin.produk-toko');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin.produk-toko');
    }
}
