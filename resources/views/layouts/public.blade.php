<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans bg-primary text-black/50 dark:bg-black dark:text-white/50">

        <!-- Menú de navegación -->
        <livewire:layout.public_navigation />
        
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            © 2024 Mi Aplicación. Todos los derechos reservados.
        </footer>
    </body>
</html>
