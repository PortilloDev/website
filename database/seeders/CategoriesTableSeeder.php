<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Programación', 'slug' => 'programacion'],
            ['name' => 'Marketing', 'slug' => 'marketing'],
            ['name' => 'Herramientas IA', 'slug' => 'herramientas-ia'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
