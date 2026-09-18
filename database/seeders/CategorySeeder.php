<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'makanan',
            'minuman',
            'kebutuhan rumah tangga',
            'obat obatan'
        ];

        foreach($categories as $cat){
            Kategori::create([
                'name'=>$cat,
                'slug'=>Str::slug($cat)
            ]);
        };
    }
}
