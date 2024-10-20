<x-app-layout>
    <div class="py-12">
        <section>
            <img src="{{ asset('/storage/image/banner.png') }}" alt="Imagen principal" class="w-full h-auto">
            <div class="container mx-auto text-center py-12 px-4">
                <h2 class="text-4xl font-extrabold mb-4">Impulsa tu desarrollo</h2>
                <p class="text-lg text-gray-700 mb-6">Ofrecemos soluciones innovadoras para tu crecimiento personal y profesional.</p>
                <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">Explorar</a>
            </div>
        </section>
    
    </div>
    <main class="container mx-auto py-12 px-4">
        <main class="container mx-auto py-12 px-4">
            <!-- Hero Section -->
            <section class="hero bg-cover bg-center text-center mb-12" style="background-image: url('https://via.placeholder.com/1920x600');">
                <div class="py-24 bg-black bg-opacity-40">
                    <h1 class="text-5xl font-bold text-white mb-4">Artesanos del Código</h1>
                    <p class="text-lg text-white mb-6">Impulsando tu desarrollo personal y profesional a través del código</p>
                    <div class="flex justify-center space-x-4">
                        <a href="/podcast" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">Escucha el Podcast</a>
                        <a href="/productos" class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600">Compra el Ebook</a>
                    </div>
                </div>
            </section>
    
            <!-- Destacados del Podcast -->
            <section class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-6">Últimos Episodios del Podcast</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white shadow p-6 rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Episodio 1" class="w-full h-auto mb-4">
                        <h3 class="text-xl font-bold mb-2">Episodio 1</h3>
                        <p class="text-gray-700 mb-4">Descubre estrategias prácticas para mejorar tus habilidades en desarrollo web.</p>
                        <a href="/podcast/episodio-1" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Escuchar Ahora</a>
                    </div>
                    <div class="bg-white shadow p-6 rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Episodio 2" class="w-full h-auto mb-4">
                        <h3 class="text-xl font-bold mb-2">Episodio 2</h3>
                        <p class="text-gray-700 mb-4">Entrevista con expertos en el mundo del código y su impacto en la comunidad.</p>
                        <a href="/podcast/episodio-2" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Escuchar Ahora</a>
                    </div>
                    <div class="bg-white shadow p-6 rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Episodio 3" class="w-full h-auto mb-4">
                        <h3 class="text-xl font-bold mb-2">Episodio 3</h3>
                        <p class="text-gray-700 mb-4">Hablamos sobre las mejores prácticas para mantener un buen flujo de trabajo.</p>
                        <a href="/podcast/episodio-3" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Escuchar Ahora</a>
                    </div>
                </div>
            </section>
    
            <!-- Productos Destacados -->
            <section class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-6">Productos Destacados</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white shadow p-6 rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Producto 1" class="w-full h-auto mb-4">
                        <h3 class="text-xl font-bold mb-2">Ebook 1</h3>
                        <p class="text-gray-700 mb-4">Una guía completa para iniciarte en el desarrollo web moderno.</p>
                        <a href="https://amazon.com/ebook-1" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Comprar en Amazon</a>
                    </div>
                    <div class="bg-white shadow p-6 rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Producto 2" class="w-full h-auto mb-4">
                        <h3 class="text-xl font-bold mb-2">Ebook 2</h3>
                        <p class="text-gray-700 mb-4">Mejora tus habilidades de código con los mejores consejos y prácticas.</p>
                        <a href="https://amazon.com/ebook-2" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Comprar en Amazon</a>
                    </div>
                </div>
            </section>
    
            <!-- Formulario de Suscripción al Newsletter -->
            <section class="bg-blue-600 text-white py-12 px-4 rounded-lg text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">¡No te pierdas ninguna actualización!</h2>
                <p class="text-lg mb-6">Suscríbete a nuestro newsletter y recibe los últimos episodios y noticias directamente en tu bandeja de entrada.</p>
                <form action="/newsletter" method="POST" class="flex justify-center">
                    <input type="email" name="email" class="w-full md:w-1/3 px-4 py-2 rounded-l-md" placeholder="Tu correo electrónico" required>
                    <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded-r-md hover:bg-yellow-600">Suscribirme</button>
                </form>
            </section>
    
            <!-- Testimonios (Opcional) -->
            <section class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-6">Lo que dicen nuestros oyentes</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-gray-200 p-6 rounded-lg">
                        <img src="https://via.placeholder.com/100" alt="Testimonio 1" class="w-16 h-16 rounded-full mx-auto mb-4">
                        <p class="text-lg italic mb-4">"El podcast de Artesanos del Código me ha ayudado a mejorar mis habilidades y aprender nuevas técnicas. Muy recomendado."</p>
                        <p class="font-bold">Juan Pérez, Desarrollador Web</p>
                    </div>
                    <div class="bg-gray-200 p-6 rounded-lg">
                        <img src="https://via.placeholder.com/100" alt="Testimonio 2" class="w-16 h-16 rounded-full mx-auto mb-4">
                        <p class="text-lg italic mb-4">"Me encanta la manera clara y directa con la que explican conceptos complejos. Muy útil."</p>
                        <p class="font-bold">María González, Diseñadora UX</p>
                    </div>
                </div>
            </section>
    </main>
</x-app-layout>