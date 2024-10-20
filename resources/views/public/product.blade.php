<x-app-layout>
    <main class="container mx-auto py-12 px-4">
        <!-- Detalle del Producto -->
        <section class="bg-white shadow p-6 rounded-lg mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Imagen del Producto -->
                <div>
                    <img src="https://via.placeholder.com/600x800" alt="Imagen del Producto" class="w-full h-auto rounded-lg">
                </div>
                <!-- Información del Producto -->
                <div>
                    <h1 class="text-4xl font-bold mb-4">Ebook: Guía Completa para Desarrollo Web</h1>
                    <p class="text-xl text-gray-700 mb-6">Una guía práctica y completa para aprender y mejorar tus habilidades de desarrollo web moderno. Ideal para principiantes y desarrolladores intermedios.</p>
                    <p class="text-2xl font-bold text-blue-700 mb-4">$19.99</p>
                    <a href="https://amazon.com/ebook-guia-completa" class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600 inline-block">Comprar en Amazon</a>
                    <div class="mt-8">
                        <h2 class="text-2xl font-bold mb-4">Sinopsis</h2>
                        <p class="text-gray-700 mb-6">Este ebook está diseñado para aquellos que desean aprender desarrollo web desde cero, proporcionando ejemplos prácticos y ejercicios para mejorar tus habilidades. Incluye capítulos sobre HTML, CSS, JavaScript, y frameworks modernos.</p>
                        <h2 class="text-2xl font-bold mb-4">Índice</h2>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Introducción al Desarrollo Web</li>
                            <li>HTML y la Estructura de las Páginas Web</li>
                            <li>Estilos con CSS</li>
                            <li>JavaScript para Interactividad</li>
                            <li>Frameworks Modernos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reseñas de Clientes (Opcional) -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Reseñas de Clientes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-200 p-6 rounded-lg">
                    <p class="text-lg italic mb-4">"Este ebook me ha ayudado mucho a entender los fundamentos del desarrollo web. Muy completo y fácil de seguir."</p>
                    <p class="font-bold">Laura Ramírez</p>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg">
                    <p class="text-lg italic mb-4">"Me encanta la forma en que los conceptos se explican de manera clara y con ejemplos prácticos. Lo recomiendo totalmente."</p>
                    <p class="font-bold">Carlos Fernández</p>
                </div>
            </div>
        </section>

        <!-- Productos Relacionados (Opcional) -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Productos Relacionados</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow p-6 rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Producto Relacionado 1" class="w-full h-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Ebook: JavaScript para Principiantes</h3>
                    <p class="text-gray-700 mb-4">Aprende JavaScript de forma sencilla y práctica.</p>
                    <a href="https://amazon.com/ebook-js" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Comprar en Amazon</a>
                </div>
                <div class="bg-white shadow p-6 rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Producto Relacionado 2" class="w-full h-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Ebook: CSS Avanzado</h3>
                    <p class="text-gray-700 mb-4">Mejora el diseño de tus páginas con técnicas avanzadas de CSS.</p>
                    <a href="https://amazon.com/ebook-css" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Comprar en Amazon</a>
                </div>
                <div class="bg-white shadow p-6 rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Producto Relacionado 3" class="w-full h-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Ebook: Desarrollo Web Fullstack</h3>
                    <p class="text-gray-700 mb-4">Conviértete en un desarrollador web fullstack con esta guía.</p>
                    <a href="https://amazon.com/ebook-fullstack" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Comprar en Amazon</a>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>