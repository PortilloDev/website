<x-app-layout>
    <!-- Banner de ancho completo -->
    <section class="w-full h-64 bg-secondary flex items-center justify-center">
        <div class="text-black text-center">
            <h1 class="text-4xl font-bold">Apasionado por el Código, Comprometido con la Excelencia</h1>
            <p class="text-lg mt-2">Nunca es tarde para empezar a construir tus sueños y alcanzar nuevas metas.</p>
        </div>
    </section>

    <!-- Página Sobre Nosotros -->
    <main class="container mx-auto py-12 px-4">
        <!-- Sección de Tu Historia -->
        <section class="mb-12">
            <div class="flex flex-col md:flex-row items-center md:space-x-8">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="{{ asset('/storage/image/aboutme.jpeg') }}" alt="Imagen de presentación" class="w-full h-auto rounded-lg shadow">
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                    <h2 class="text-4xl font-bold mb-6 text-black">Desarrollador de Software y Mentor Tecnológico</h2>
                    <p class="mb-3 text-gray-600 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-black first-letter:me-3 first-letter:float-start">Hola soy Iván Portillo, soy el creador de <strong>Artesanos del código </strong> y del blog programación <strong><a href="https://notasweb.me" target="_blank"> Notas Web.</a></strong> Con una trayectoria profesional enfocada en el desarrollo backend y la gestión de datos, me destaco en la implementación de soluciones estratégicas para la digitalización de procesos y la protección de la información personal. He contribuido a proyectos de innovación tecnológica, aplicando arquitecturas modernas como Hexagonal y CQRS, y trabajando con microservicios en entornos dockerizados.</p>
                    <p class="mb-3 text-gray-500 dark:text-gray-400">Mi experiencia me ha permitido especializarme en la gestión de datos relacionados con el RGPD, empleando metodologías ágiles y buenas prácticas en el desarrollo de software. Estoy comprometido con el avance continuo en mi campo, buscando siempre la eficiencia y la calidad en el desarrollo de aplicaciones web que impulsen el crecimiento y el éxito de los proyectos a los que me uno.</p>
                    <p class="mb-3 text-gray-500 dark:text-gray-400">Con más de 8 años de experiencia trabajando en proyectos de desarrollo de software y colaborando con equipos de marketing, he descubierto los secretos para construir y hacer crecer blogs, monetizarlos y utilizar herramientas de IA para optimizar el proceso de creación de contenido.</p>
                </div>
            </div>
        </section>

        <!-- Sección de Misión y Visión -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6 text-black">Misión y Visión</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white shadow p-6 rounded-lg">
                    <h3 class="text-2xl font-bold mb-4 text-black">Compartir Conocimiento, Impulsar Talentos</h3>
                    <p class="mb-3 text-gray-600 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:me-3 first-letter:float-start">Mi misión es compartir mi experiencia y conocimientos para ayudar a otros desarrolladores a mejorar sus habilidades y alcanzar su máximo potencial. Creo firmemente en el poder de la comunidad y en la importancia de crecer juntos en este apasionante mundo del desarrollo.</p>
                </div>
                <div class="bg-white shadow p-6 rounded-lg">
                    <h3 class="text-2xl font-bold mb-4 text-black">Transformar Vidas a Través del Código</h3>
                    <p class="mb-3 text-gray-600 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:me-3 first-letter:float-start">Aspiro a facilitar la entrada de más personas al sector de la programación, brindándoles las herramientas y el conocimiento necesario para mejorar sus vidas. Mi visión es construir una comunidad inclusiva donde el aprendizaje y la innovación sean accesibles para todos.</p>
                </div>
            </div>
        </section>
        <!-- Formulario de Suscripción al Newsletter -->
        <x-newsletter-form />
    </main>
</x-app-layout>
