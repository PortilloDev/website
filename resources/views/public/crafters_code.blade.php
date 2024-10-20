<x-app-layout>
    <main class="container mx-auto py-12 px-4">
        <!-- Listado de Episodios -->
        <section class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-8">Episodios del Podcast</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow p-6 rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Episodio 1" class="w-full h-auto mb-4">
                    <h2 class="text-2xl font-bold mb-2">Episodio 1: Introducción al Desarrollo Web</h2>
                    <p class="text-gray-700 mb-4">Descubre los fundamentos del desarrollo web y cómo empezar en este apasionante mundo.</p>
                    <audio controls class="w-full mb-4">
                        <source src="https://via.placeholder.com/audio.mp3" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                    <a href="/podcast/episodio-1" class="text-blue-600 hover:text-blue-800">Ver más detalles</a>
                </div>
                <div class="bg-white shadow p-6 rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Episodio 2" class="w-full h-auto mb-4">
                    <h2 class="text-2xl font-bold mb-2">Episodio 2: Herramientas para Desarrolladores</h2>
                    <p class="text-gray-700 mb-4">Hablamos sobre las mejores herramientas que todo desarrollador web debería conocer.</p>
                    <audio controls class="w-full mb-4">
                        <source src="https://via.placeholder.com/audio.mp3" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                    <a href="/podcast/episodio-2" class="text-blue-600 hover:text-blue-800">Ver más detalles</a>
                </div>
                <div class="bg-white shadow p-6 rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Episodio 3" class="w-full h-auto mb-4">
                    <h2 class="text-2xl font-bold mb-2">Episodio 3: Consejos para Mejorar tu Productividad</h2>
                    <p class="text-gray-700 mb-4">Aprende a ser más productivo como desarrollador web con estos consejos prácticos.</p>
                    <audio controls class="w-full mb-4">
                        <source src="https://via.placeholder.com/audio.mp3" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                    <a href="/podcast/episodio-3" class="text-blue-600 hover:text-blue-800">Ver más detalles</a>
                </div>
            </div>
        </section>

        <!-- Suscripción al Podcast -->
        <section class="bg-blue-600 text-white py-12 px-4 rounded-lg text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">¡Suscríbete a nuestro Podcast!</h2>
            <p class="text-lg mb-6">Recibe notificaciones de nuevos episodios y contenido exclusivo directamente en tu bandeja de entrada.</p>
            <form action="/podcast/suscripcion" method="POST" class="flex justify-center">
                <input type="email" name="email" class="w-full md:w-1/3 px-4 py-2 rounded-l-md" placeholder="Tu correo electrónico" required>
                <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded-r-md hover:bg-yellow-600">Suscribirme</button>
            </form>
        </section>

        <!-- Comentarios o Valoraciones (Opcional) -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Comentarios de Nuestros Oyentes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-200 p-6 rounded-lg">
                    <p class="text-lg italic mb-4">"El podcast de Artesanos del Código me ha permitido entender mejor el mundo del desarrollo web y mejorar mis habilidades."</p>
                    <p class="font-bold">Alejandro López</p>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg">
                    <p class="text-lg italic mb-4">"Me encanta cómo explican temas complejos de una forma sencilla y directa. ¡Recomendado!"</p>
                    <p class="font-bold">Sofía Martínez</p>
                </div>
            </div>
        </section>

        <!-- Suscripción al Podcast en Plataformas Externas -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Escúchanos en Tu Plataforma Favorita</h2>
            <div class="flex justify-center space-x-8">
                <a href="#" class="text-blue-600 hover:text-blue-800">Spotify</a>
                <a href="#" class="text-blue-600 hover:text-blue-800">Apple Podcasts</a>
                <a href="#" class="text-blue-600 hover:text-blue-800">Google Podcasts</a>
            </div>
        </section>
    </main>
</x-app-layout>