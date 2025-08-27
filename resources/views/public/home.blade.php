
<x-app-layout>
    <x-hero :background="asset('/storage/image/learn_artesanos.webp')"
        :title="'Explora, Aprende y Crea con Nosotros'"
        :subtitle="'Descubre una amplia gama de recursos y productos diseñados para llevar tus habilidades al siguiente nivel. Desde ebooks y herramientas descargables hasta conversaciones inspiradoras en nuestro podcast, tenemos todo lo que necesitas para potenciar tu carrera en programación y desarrollo web.'"
    >
        <x-slot name="cta">
            <a href="/podcast" class="inline-flex items-center rounded-md bg-blue-600 px-6 py-3 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Escucha el Podcast</a>
            <a href="/productos" class="inline-flex items-center rounded-md bg-amber-500 px-6 py-3 text-white hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">Ver Recursos</a>
        </x-slot>
    </x-hero>

    <main class="container mx-auto py-6 px-4">
        <!-- Sección Presentando el Podcast -->
        <section class="text-center mb-6 w-3/4 container mx-auto">
            <div class="flex flex-col md:flex-row items-center md:space-x-8  gap-8">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="{{asset('/storage/image/artesanos_info.png') }}" alt="Imagen de presentación" class="w-full h-auto rounded-lg shadow">
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                    <h2 class="text-3xl font-bold mb-4 text-black">Podcast "Artesanos del Código"</h2>
                    <p class="mb-3 text-gray-600 dark:text-gray-700 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-black first-letter:me-3 first-letter:float-start">Sumérgete en nuestro podcast donde compartimos experiencias, buenas prácticas y las últimas tendencias en programación y desarrollo web. Cada episodio es una oportunidad para aprender, inspirarte y conectarte con expertos que comparten tu pasión por el código.</p>
                    <a href="{{route('podcast')}}" class="bg-blue_button text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block">Ir al Podcast</a>
                </div>
            </div>
        </section>

        <!-- Sección Presentando Contenido de Marketing y Programación -->
        <section class="text-center mb-6 w-3/4 container mx-auto">
            <div class="flex flex-col md:flex-row items-center md:space-x-8  gap-8">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="{{asset('/storage/image/ebooks_info.png') }}" alt="Imagen de presentación" class="w-full h-auto rounded-lg shadow">
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                    <h2 class="text-3xl font-bold mb-4 text-black">Recursos y Productos Exclusivos</h2>
                    <p class="mb-3 text-gray-600 dark:text-gray-700 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-black first-letter:me-3 first-letter:float-start">Accede a nuestros ebooks, herramientas descargables y otros recursos diseñados para desarrolladores comprometidos con su crecimiento profesional. Ya sea que busques profundizar en nuevas tecnologías o perfeccionar tus habilidades actuales, nuestros productos te ofrecen el conocimiento y las herramientas necesarias para destacar en el mundo del desarrollo web</p>
                    <a href="{{route('product')}}" class="bg-blue_button text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block">Explorar Productos</a>
                </div>
            </div>
        </section>

        <!-- Sección Presentando Servicios -->
        <section class="text-center mb-6 w-3/4 container mx-auto">
            <div class="flex flex-col md:flex-row items-center md:space-x-8  gap-8">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="{{asset('/storage/image/service_info.png') }}" alt="Imagen de presentación" class="w-full h-auto rounded-lg shadow">
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                    <h2 class="text-3xl font-bold mb-4 text-black">Servicios</h2>
                    <p class="mb-3 text-gray-600 dark:text-gray-700 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-black first-letter:me-3 first-letter:float-start">Creemos que cada proyecto merece su espacio en la web y la visibilidad para crecer.
                        En <strong>Artesanos del Código </strong>, ayudamos a emprendedores, profesionales y pequeñas empresas a construir una presencia en línea auténtica y accesible. Ofrecemos servicios completos de puesta en marcha de sitios web en WordPress, formación personalizada y mantenimiento para asegurar que cada proyecto, sin importar su tamaño o presupuesto, tenga el soporte y la visibilidad que necesita para destacar en el mundo digital.</p>
                    <a href="{{route('services')}}" class="bg-blue_button text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block">Explorar Servicios</a>
                </div>
            </div>
        </section>

        <!-- Formulario de Suscripción al Newsletter -->
        <x-newsletter-form :source="$source" :tags="$tags" />
    </main>
</x-app-layout>

