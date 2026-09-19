<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
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
        $kategori = Kategori::all();
        return view('produk.tambah_produk', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'qty' => 'required|integer',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $namaGambar = 'default.jpg';

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');

            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            $gambar->move(public_path('images'), $namaGambar);
        }

        Product::create([
            'id_kategori' => $request->id_kategori,
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'qty' => $request->qty,
            'harga' => $request->harga,
            'gambar' => $namaGambar,
        ]);

        return redirect()->route('produk.index');
    }

    public function edit($id)
    { //ngambil parameter id dari web.php
        $product = Product::findOrFail($id); //trus dicari disini
        $kategori = Kategori::all();
        return view('produk.edit_produk', compact('product', 'kategori')); //di comppact buat diteruskan ke vuiw
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kategori' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', //nullabel kalo ga ada gambar gpp
        ]);

        $product = Product::findOrFail($id); //diambil dulu pake id yang sesuai

        $data = [ //data baru jg disimpen dari inputan
            'id_kategori' => $request->id_kategori,
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

        return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('produk.index');
    }
}
