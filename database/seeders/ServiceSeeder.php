<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
        Service::create([
            'title' => 'Servicio Básico',
            'slug' => 'servicio-basico',
            'description' => 'Puesta en marcha de la web con WordPress. Incluye instalación y configuración de un tema básico, formación inicial y soporte.',
            'price' => 175.00,
            'type' => 'basic'
        ]);
        Service::create([
            'title' => 'Servicio Avanzado',
            'slug' => 'servicio-avanzado',
            'description' => 'Incluye todo lo del Servicio Básico más personalización del tema, plugins avanzados y soporte extendido.',
            'price' => 350.00,
            'type' => 'advanced'
        ]);
        Service::create([
            'title' => 'Servicio Premium',
            'slug' => 'servicio-premium',
            'description' => 'Incluye todo lo del Servicio Avanzado más diseño personalizado, integración de herramientas y soporte ilimitado.',
            'price' => 600.00,
            'type' => 'premium'
        ]);
    }
}
