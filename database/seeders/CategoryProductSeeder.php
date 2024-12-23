<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('category_product')->insert([
        [
            'id' => 1,
            'category_id' => 2,
            'product_id' => 2,
            'created_at' => now(),
        ],
        [
            'id' => 2,
            'category_id' => 2,
            'product_id' => 1,
            'created_at' => now(),
        ],
        ]);
    }
}
