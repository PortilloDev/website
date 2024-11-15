<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Suscrito') }}
        </h2>
    </x-slot>

    <div class="flex flex-col items-center bg-gray-100 min-h-screen p-6">
        <!-- Encabezado -->
        <img src="{{asset("/storage/image/imagen-apoyo.png")}}" alt="Imagen de espera" class="w-100 h-100 mb-6">

        <div class="mt-12 text-center">
            <div class="flex flex-col md:flex-row flex-wrap justify-center gap-4">
                <div class="bg-blue_button shadow p-4 rounded-lg w-60 flex items-center gap-2">
                    <img src="{{ asset('/storage/image/icono-gmail.png') }}" alt="Gmail" class="h-6 w-6">
                    <a href="https://mail.google.com/mail/u/0/#inbox" class="text-white rounded hover:bg-indigo-500 transition">
                        Ir a Gmail y confirmar
                    </a>
                </div>
                <div class="bg-blue_button shadow p-4 rounded-lg w-60 flex items-center gap-2">
                    <img src="{{ asset('/storage/image/icono-hotmail.png') }}" alt="Gmail" class="h-6 w-6">
                    <a href="https://outlook.live.com/mail/0/" class="text-white rounded hover:bg-indigo-500 transition">
                        Ir a Outlook y confirmar
                    </a>
                </div>
                <div class="bg-blue_button shadow p-4 rounded-lg w-60 flex items-center gap-2">
                    <img src="{{ asset('/storage/image/icono-yahoo.png') }}" alt="Gmail" class="h-6 w-6">
                    <a href="https://mail.yahoo.com/?.intl=es&.lang=es-ES&.partner=none&.src=fp" class="text-white rounded hover:bg-indigo-500 transition">
                        Ir a Yahoo y confirmar
                    </a>
                </div>
            </div>
        </div>

        <!-- Sección de contacto -->
        <div class="mt-8 text-center">
            <p class="text-black text-sm">¿Problemas? <a href="mailto:contacto@notasweb.me" class="text-blue_button">Contáctanos</a>.</p>
        </div>
    </div>
</x-app-layout>
