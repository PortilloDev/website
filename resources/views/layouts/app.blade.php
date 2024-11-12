<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="Cache-Control" content="public, max-age=31536000">
        <title>@yield('meta_title') - {{ config('app.name') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Web promocional del Podcast y servicios de programación sobre desarrollo web">
        <meta name="meywords" content="Web promocional del Podcast y servicios de programación sobre desarrollo web">

        <meta property="og:type" content="website" />
        <meta property="og:title" content="  {{ config('app.name') }}  " />
        <meta property="og:description" content="  Artesanos del Código - Podcast, Blog, Servicios, Proyectos  " />
        <meta property="og:url" content="https://artesanosdelcodigo.com" />
        <meta property="og:site_name"  content="  {{ config('app.name') }}  " />

        <meta property="og:image" content="{{ asset('storage/blog/home.jpg') }}" />
        <meta property="og:image" content=@yield('meta_image') />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM0sFf84ohLe6I0WgOycVi/3OxczQ8p2g8pY5B7" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        @include('cookie-consent::index')
        <header class="bg-secondary shadow">
            <div class="container mx-auto flex justify-between items-center py-6 px-4">
                <h1 class="text-3xl font-bold text-center"><a href="{{ route('home') }}" class="hover:underline">Artesanos del Código</a></h1>
                <livewire:layout.public_navigation />
                @if (auth()->check())
                    <livewire:layout.navigation />
                @endif




            </div>
        </header>
        <div class="min-h-screen bg-primary text-black/50 dark:text-white/50">
            <!-- Page Content -->
            <main>
                {{ $slot }}

                <livewire:layout.footer />
            </main>

        </div>
        @vite('resources/js/app.js')
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
        @livewireScripts
    </body>
</html>
