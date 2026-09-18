<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_kategori' => Kategori::inRandomOrder()->first()->id ?? 1,
            'kode_barang' => fake()->unique()->bothify('BRG-####'),
            'nama_barang' => fake()->words(2, true),
            'qty' => fake()->numberBetween(1, 100),
            'harga' => fake()->numberBetween(5000, 100000),
            'gambar' => 'default.jpg',
        ];
    }
}
