<x-app-layout>
    <main class="container mx-auto py-12 px-4">
        <section class="bg-white shadow p-6 rounded-lg text-center mb-12">
            <h1 class="text-4xl font-bold mb-8 text-black">¿Tienes Alguna Pregunta o Proyecto en Mente?</h1>
            <p class="text-xl text-gray-700 mb-6">Estoy aquí para ayudarte. Ya sea que desees colaborar, tengas alguna duda o simplemente quieras saludar, no dudes en enviarme un mensaje. Responderemos en un plazo de 24-48 horas.</p>
        </section>
        <!-- Sección del Formulario de Contacto -->
        <section class="text-center mb-12">
            <div class="bg-white shadow p-6 rounded-lg">
                <form action="/contacto/enviar" method="POST" class="grid grid-cols-1 gap-6">
                    @csrf
                    <div>
                        <label for="nombre" class="block text-left text-gray-700 mb-2">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-left text-gray-700 mb-2">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="mensaje" class="block text-left text-gray-700 mb-2">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue_button text-white px-6 py-3 rounded-md hover:bg-blue-700">Enviar Mensaje</button>
                </form>
            </div>
        </section>

        <!-- Información de Contacto -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6 text-black">Nuestra Información de Contacto</h2>
            <div class="bg-white shadow p-6 rounded-lg">
                <p class="text-lg text-gray-700 mb-4">Correo Electrónico: <a href="mailto:ivan.portillo@notasweb.me" class="text-blue-600 hover:underline">ivan.portillo@notasweb.me</a></p>
                <p class="text-xl text-gray-700 mb-6">También puedes encontrarme en redes sociales y plataformas profesionales. ¡Conectemos y construyamos juntos la comunidad de Artesanos del Código!</p>
            </div>
        </section>
        <!-- Formulario de Suscripción al Newsletter -->
        <x-newsletter-form />

        <!-- Mapa (Opcional) -->
        <!-- Sección de Nuestra Ubicación -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6 text-black">Nuestra Ubicación</h2>
            <div class="bg-white shadow p-6 rounded-lg">
                <iframe class="w-full h-64 md:h-96 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.4545037212223!2d-3.7037907845944667!3d40.41677597936447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229978dc0e8a5%3A0xc4a6c77a03e09db8!2sMadrid%2C+Espa%C3%B1a!5e0!3m2!1ses!2ses!4v1693222020022" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </main>
</x-app-layout>
