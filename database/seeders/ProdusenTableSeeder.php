<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdusenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            [
                'nama_pabrik' => 'PT. Indofood',
                'nama_barang' => 'Minyak Sawit',
                'jenis_barang' => 'makanan',
                'alamat' => 'Jawa',
                'no_telepon' => '08123456789',
                'email' => 'indofood@gmail.com',
            ],
            [
                'nama_pabrik' => 'PT. Unilever',
                'nama_barang' => 'Sabun',
                'jenis_barang' => 'makanan',
                'alamat' => 'Kalimantan',
                'no_telepon' => '08123456789',
                'email' => 'unilever@gmail.com',
            ],
            [
                'nama_pabrik' => 'PT. Wings Food',
                'nama_barang' => 'Mie Instan',
                'jenis_barang' => 'makanan',
                'alamat' => 'Sumatera',
                'no_telepon' => '08123456789',
                'email' => 'wings@gmail.com',
            ],
        ];

        DB::table('supliers')->insert($suppliers);
    }
}

