<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 8; $i++) { 
            DB::table('product')->insert([
                'name' => 'Product ' . $i,
                'price' =>  floor(mt_rand(40000, 200000)),
                'image' => 'resources/image/shoes-men-' . $i . '.jpg'
            ]);

            DB::table('product')->insert([
                'name' => 'Product ' . $i,
                'price' =>  floor(mt_rand(40000, 200000)),
                'image' => 'resources/image/shoes-women-' . $i . '.jpg'
            ]);
        }
    }
}
