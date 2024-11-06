<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Laravel', 'slug' => 'laravel'],
            ['name' => 'Tailwind', 'slug' => 'tailwind'],
            ['name' => 'Inteligencia Artificial', 'slug' => 'inteligencia-artificial'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
