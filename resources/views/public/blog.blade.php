<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sobre nuestro Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg">Este sitio web es una sección informativa sobre mi otro blog donde comparto artículos relacionados con el desarrollo web y temas afines. Puedes explorar mis publicaciones y obtener más detalles sobre diferentes proyectos en:</p>
                    <a href="https://notasweb.me" target="_blank" class="text-blue-500 hover:underline mt-4 inline-block">notasweb.me</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
