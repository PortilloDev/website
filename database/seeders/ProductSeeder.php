<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Crea los registros en la tabla 'products' con estas propiedades 'title', 'description', 'product_type_id', 'url', 'image', 'slug', 'price', 'image_url', 'external_url', 'type'



       DB::table('products')->insert([
        [
            'id' => 1,
            'title' => 'Fundamentos del Backend: Aprende Desarrollo Backend Construyendo una API Completa con Node.js',
            'description' => 'Este libro es una inmersión completa en el mundo del desarrollo backend. A través de un proyecto práctico de API en Node.js, te adentrarás en cada área fundamental del backend, desde la arquitectura de software hasta la seguridad, optimización del rendimiento y despliegue en producción.

Más que una simple guía de Node.js, esta obra ofrece una perspectiva integral y práctica de todos los elementos necesarios para construir y mantener una aplicación backend profesional. Cada capítulo es una pieza clave en el desarrollo de tu API, que te enseñará a gestionar bases de datos, implementar pruebas automatizadas, aplicar CI/CD y llevar la API a producción en la nube.

Si buscas aprender los fundamentos sólidos del backend, este libro te ofrece la guía completa que necesitas para convertirte en un desarrollador backend competente y confiado',
            'product_type_id' => 1,

            'slug' => 'ebook-arketing',
            'price' => 9.99,
            'image_url' => 'ebook_marketing.jpg',
            'external_url' => 'https://example.com/ebook',
            'type' => 'ebook'
        ],
        [
            'id' => 2,
            'title' => 'Ebook Backend',
            'description' => 'Ebook Backend description',
            'product_type_id' => 2,
            'slug' => 'ebook-backend',
            'price' => 9.99,
            'image_url' => 'ebook_back.jpg',
            'external_url' => 'https://example.com/ebook',
            'type' => 'ebook'
        ]
        ]);
    }
}
