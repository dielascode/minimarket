<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdusenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produsen')->insert([
            'nama_pabrik'=>"PT. Sawit Indonesia Emas 2045",
            'nama_barang'=>"sawit",
            'jenis_barang'=>"makanan",
            'alamat'=>"kalimantan",
            'no_telepon'=>'08123456789',
            'email'=>'prabowo@gmail.com'
        ]);
    }
}
