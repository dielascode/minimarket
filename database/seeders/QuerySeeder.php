<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data biasa
        DB::table('users')->insert([
            'name'=>'John Doe',
            'email'=>'john@gmail.com',
            'password'=>bcrypt('admin123'),
            'role'=>'admin'
        ]);

        $id = DB::table('users')->insertGetId([
            'name'=>'Muhammad Sumbul',
            'email'=>'sumbul@gmail.com',
            'password'=>bcrypt('admin123'),
            'role'=>'admin'
        ]);
    }
}
