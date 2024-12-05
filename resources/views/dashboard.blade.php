<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
};
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="container mx-auto px-4 py-8">
        <!-- Título de la Página -->
        <h1 class="text-4xl font-bold text-center mb-8 text-black">Área Privada</h1>

        <!-- Panel Principal -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Inicio / Panel Principal</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <p class="text-gray-600 mb-4">Bienvenido/a al Área Privada. Aquí encontrarás herramientas, recursos y novedades especialmente diseñadas para nuestros usuarios registrados.</p>
                <div class="bg-blue-100 text-blue-800 p-4 rounded-md mb-4">
                    <strong>Notificación:</strong> No olvides revisar los nuevos recursos disponibles en la sección de documentos descargables.
                </div>
            </div>
        </div>
        <!-- Accesos directos -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Accesos directos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Perfil -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Accesos</h3>
                    <ul class="list-disc list-inside text-gray-600">
                        <li><a href="{{route('profile')}}" class="text-blue-600 hover:underline">Mi cuenta</a></li>
                    </ul>
                    <ul class="list-disc list-inside text-gray-600">
                        <li><button wire:click="logout" class="text-blue-600 hover:underline">Logout</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Documentos y Recursos Descargables -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Documentos y Recursos Descargables</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Categoría: Tutoriales -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Tutoriales</h3>
                    <ul class="list-disc list-inside text-gray-600">
                        <li><a href="#" class="text-blue-600 hover:underline">Guía básica de WordPress</a></li>
                        <li><a href="#" class="text-blue-600 hover:underline">Optimización SEO</a></li>
                    </ul>
                </div>
                <!-- Categoría: Formatos de contenido -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Formatos de Contenido</h3>
                    <ul class="list-disc list-inside text-gray-600">
                        <li><a href="#" class="text-blue-600 hover:underline">Plantillas de diseño</a></li>
                        <li><a href="#" class="text-blue-600 hover:underline">Recursos para campañas</a></li>
                    </ul>
                </div>
                <!-- Categoría: Recursos de Marketing -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Recursos de Marketing</h3>
                    <ul class="list-disc list-inside text-gray-600">
                        <li><a href="#" class="text-blue-600 hover:underline">Estrategias de email marketing</a></li>
                        <li><a href="#" class="text-blue-600 hover:underline">Plantillas para anuncios</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Formación Exclusiva -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Formación Exclusiva</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Video -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Vídeos</h3>
                    <video controls class="w-full rounded-md">
                        <source src="/path/to/video.mp4" type="video/mp4">
                        Tu navegador no soporta la reproducción de videos.
                    </video>
                </div>
                <!-- Guías paso a paso -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Guías Paso a Paso</h3>
                    <p class="text-gray-600 mb-4">Explora guías detalladas para optimizar tu trabajo en WordPress, IA y Marketing.</p>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 inline-block">Ver Guías</a>
                </div>
            </div>
        </div>

        <!-- Soporte y FAQ -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Soporte y FAQ</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Preguntas Frecuentes</h3>
                <ul class="list-disc list-inside text-gray-600 mb-4">
                    <li><a href="#" class="text-blue-600 hover:underline">¿Cómo descargo un recurso?</a></li>
                    <li><a href="#" class="text-blue-600 hover:underline">¿Cómo accedo a los videos exclusivos?</a></li>
                </ul>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Formulario de Contacto</h3>
                <form action="#" method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Tu nombre" class="w-full p-2 border rounded-md">
                    <textarea name="message" placeholder="Escribe tu consulta" class="w-full p-2 border rounded-md"></textarea>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Enviar</button>
                </form>
            </div>
        </div>

        <!-- Historial de Actividad -->
        <div>
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Historial de Actividad</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <table class="w-full text-left">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-black">Recurso</th>
                        <th class="px-4 py-2 text-black">Fecha</th>
                        <th class="px-4 py-2 text-black">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="px-4 py-2 text-gray-600">Plantilla de Email</td>
                        <td class="px-4 py-2 text-gray-600">2024-11-29</td>
                        <td class="px-4 py-2 text-blue-600 hover:underline">Descargado</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 text-gray-600">Estrategia SEO</td>
                        <td class="px-4 py-2 text-gray-600">2024-11-28</td>
                        <td class="px-4 py-2 text-blue-600 hover:underline">Visto</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
