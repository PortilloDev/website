<x-app-layout>
    <main class="container mx-auto py-12 px-4">
        <section class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4 text-black">Descubre el Podcast "Artesanos del Código"</h1>
            <p class="mb-3 text-gray-600 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-black first-letter:me-3 first-letter:float-start">Nuestro podcast es un espacio dedicado a compartir conocimiento, experiencias y tendencias en el mundo de la programación y el desarrollo web. Cada episodio es una oportunidad para aprender de expertos, inspirarte y conectar con una comunidad apasionada por el código.</p>
        </section>
        <!-- Listado de Episodios -->
        <section class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-8 text-black">Episodios del Podcast</h1>

            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold mb-2 text-black">
                    Último Episodio
                </h2>
                <hr class="text-center bold border-2">
                <section class="flex flex-col items-center text-center mb-12 mt-12">
                    <h3 class="text-3xl font-bold mb-6 text-black">{{ $lastEpisode->title }}</h3>
                    <div class="w-full md:w-3/4 lg:w-1/2">
                        {!! $lastEpisode->embedded !!}
                    </div>
                </section>
            </div>
        </section>
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-black text-center">Listado de Episodios</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-3 px-6 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">Imagen</th>
                        <th class="py-3 px-6 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-center">Título</th>
                        <th class="py-3 px-6 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-center">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($episodes as $episode)
                        <tr>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <img src="{{asset('/storage/'.$episode->image)}}" alt="{{ $episode->title }}" class="w-16 h-16 object-cover">
                            </td>
                            <td class="py-4 px-6 border-b border-gray-300 text-black">{{ $episode->title }}</td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <a href="{{ route('episode', ['slug' => $episode->slug]) }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Ver Episodio Completo</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>


        <!-- Suscripción al Podcast en Plataformas Externas -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6 text-black"> Escucha Nuestro Podcast en Tu Plataforma Favorita</h2>
            <div class="flex justify-center space-x-8">
                <a href="https://open.spotify.com/show/1TqvkZRtIpTTdEus9i2l7j" target="_blank" class="bg-green-600 text-white flex items-center space-x-2 px-4 py-2 rounded-md hover:bg-green-700">
                    <i class="fab fa-spotify"></i>
                    <span>Spotify</span>
                </a>
                <a href="https://www.ivoox.com/podcast-artesanos-del-codigo_sq_f12479098_1.html" target="_blank"  class="bg-orange-500 text-white flex items-center space-x-2 px-4 py-2 rounded-md hover:bg-orange-600">
                    <i class="fas fa-podcast"></i>
                    <span>Ivoox Podcasts</span>
                </a>
            </div>
        </section>
        <!-- Formulario de Suscripción al Newsletter -->
        <x-newsletter-form :errors="$errors"/>
    </main>
</x-app-layout>
