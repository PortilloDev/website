<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productTypes = [
            ['name' => 'Ebook', 'slug' => 'ebook', 'description' => 'Nuestros ebooks abordan temas clave en programación y desarrollo web, brindándote conocimientos profundos y prácticos para avanzar en tu carrera.'],
            ['name' => 'Curso', 'slug' => 'curso', 'description' => 'Accede a cursos y webinars que te ayudarán a mejorar tus habilidades y conocimientos en el desarrollo web'],
            ['name' => 'Recurso Descargable', 'slug' => 'recurso-descargable', 'description' => 'Accede a herramientas y recursos descargables que facilitarán tu proceso de desarrollo y te ahorrarán tiempo en tus proyectos'],
            ['name' => 'Otros', 'slug' => 'otros', 'description' => 'Encuentra webinars y otros materiales que complementarán tu formación y te mantendrán a la vanguardia de la industria.'],
        ];

        foreach ($productTypes as $type) {
            ProductType::create($type);
        }
    }
}
