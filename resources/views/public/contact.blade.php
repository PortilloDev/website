<x-app-layout>
    <main class="container mx-auto py-12 px-4">
        <!-- Sección del Formulario de Contacto -->
        <section class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-8">Contáctanos</h1>
            <div class="bg-white shadow p-6 rounded-lg">
                <p class="text-lg text-gray-700 mb-6">Si tienes alguna pregunta, comentario o simplemente quieres saludarnos, por favor completa el siguiente formulario. Responderemos en un plazo de 24-48 horas.</p>
                <form action="/contacto/enviar" method="POST" class="grid grid-cols-1 gap-6">
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
                    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">Enviar Mensaje</button>
                </form>
            </div>
        </section>

        <!-- Información de Contacto -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Nuestra Información de Contacto</h2>
            <div class="bg-white shadow p-6 rounded-lg">
                <p class="text-lg text-gray-700 mb-4">Correo Electrónico: <a href="mailto:contacto@artesanosdelcodigo.com" class="text-blue-600 hover:underline">contacto@artesanosdelcodigo.com</a></p>
                <p class="text-lg text-gray-700">Teléfono: <span class="text-gray-800">+34 123 456 789</span></p>
            </div>
        </section>

        <!-- Mapa (Opcional) -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Nuestra Ubicación</h2>
            <div class="bg-white shadow p-6 rounded-lg">
                <iframe class="w-full h-64 md:h-96 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093725!2d144.95373631550434!3d-37.81627944201344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577dd82c69e817a!2sVictoria%2C+Australia!5e0!3m2!1ses!2ses!4v1552227299022" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </main>
</x-app-layout>