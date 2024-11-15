<x-app-layout>
    <main class="container mx-auto py-12 px-4 text-black bg-white">
        <!-- Sección 1: Título y Descripción -->
        <section class="bg-white mb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 py-8">
                <div class="grid grid-cols-1 lg:grid-cols-1 items-center gap-8">
                    <div class="col-span-1 py-8">
                        <h1 class="text-center text-4xl font-extrabold mb-4 text-black">NUESTROS SERVICIOS</h1>
                        <p class="mt-4 text-left mb-3 text-gray-600 dark:text-gray-700 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-black first-letter:me-3 first-letter:float-start">Creemos que cada proyecto merece su espacio en el mundo digital y la oportunidad de destacar. En Artesanos del Código, ayudamos a emprendedores, profesionales y pequeñas empresas a construir una presencia en línea auténtica, atractiva y accesible. Ofrecemos servicios completos de creación de sitios web en WordPress, con formación personalizada y mantenimiento continuo. Nuestro objetivo es que cada proyecto, sin importar su tamaño o presupuesto, tenga el soporte y la visibilidad que necesita para llegar a más personas y crecer en el entorno digital.</p>
                        <div class="flex justify-center mt-4">
                            <a href="mailto:contacto@notasweb.me" target="_blank" class="bg-blue_button text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block mt-4"><i class="fas fa-envelope"></i> Consulta</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 2: Ventajas de tener un sitio web -->
        <section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 mb-24">
                <div>
                    <h2 class="text-center text-4xl font-extrabold mb-4 text-black">Ventajas de tu propio sitio web</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="bg-white rounded shadow px-8 py-12">
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('/storage/image/capta-cliente.png') }}" class="w-28 rounded-lg" alt="">
                            </div>
                            <h3 class="text-center font-extrabold text-lg">AMPLÍA TU ALCANCE</h3>
                            <p class="text-lg text-gray-700 mb-4 text-center mt-2">Con un sitio web diseñado en WordPress, puedes gestionar fácilmente tu contenido (texto e imágenes) y mantener tu información siempre actualizada. Gracias a una interfaz intuitiva y herramientas de inteligencia artificial, tienes el control de tu mensaje y tu imagen en internet. Haz que tu marca llegue a más personas, de manera profesional y constante.</p>
                        </div>
                        <div class="bg-white rounded-lg shadow px-8 py-12">
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('/storage/image/reduce-costes.png') }}" class="w-28 rounded-lg" alt="">
                            </div>
                            <h3 class="text-center font-extrabold text-lg">OPTIMIZA TU INVERSIÓN</h3>
                            <p class="text-lg text-gray-700 mb-4 text-center mt-2">Reduce los costos asociados a los métodos tradicionales de promoción y venta. Con una presencia en línea, puedes evitar gastos de impresión, distribución y alquiler físico, mientras logras un alcance más amplio y eficaz. Llega a más personas con menor esfuerzo y maximiza el retorno de cada inversión en tu negocio.</p>
                        </div>
                        <div class="bg-white rounded shadow px-8 py-12">
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('/storage/image/nuevo-canal-ventas.png') }}" class="w-28 rounded-lg" alt="">
                            </div>
                            <h3 class="text-center font-extrabold text-lg">CREA UNA TIENDA ACTIVA 24/7</h3>
                            <p class="text-lg text-gray-700 mb-4 text-center mt-2">Añade un canal de ventas en línea que esté disponible las 24 horas del día, los 365 días del año. Con una tienda en línea integrada, tus clientes pueden acceder a tus productos o servicios cuando lo deseen, ampliando tus oportunidades de venta sin límite de horario. Aumenta tu presencia, tus ventas y la comodidad para tus clientes, todo desde tu propio sitio web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 3: Nuestros Planes -->
        <section>
            <div class="bg-light py-20 text-white">
                <h2 class="text-center text-4xl font-extrabold mb-4 text-black">NUESTROS PLANES</h2>
                <p class="text-lg text-gray-700 mb-4 font-extrabold text-center mt-2">Elige el Plan que más se acomode a tus necesidades</p>
            </div>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                    <h2 class="text-center text-4xl font-extrabold mb-4 text-black">Tenemos la solución ideal para ti</h2>
                    <p class="text-lg text-gray-700 mb-4 font-bold text-center mt-2">Ya sea que necesites una Landing Page, una web personal o un desarrollo a medida, estamos aquí para ayudarte.</p>
                </div>
                <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0 mb-12">
                    <!-- Plan Básico -->
                    <div>
                        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                            <h3 class="mb-4 text-2xl font-semibold">Básico</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">PAGO ÚNICO</p>
                            <div class="flex justify-center items-baseline my-8">
                                <span class="mr-2 text-5xl font-extrabold">175 €</span>
                            </div>
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Dominio .COM 1 año</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Certificado SSL</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Instalación inicial y configuración wordpress</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Sitio web Autoadministrable</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Mantenimiento durante el primer año (hasta 1 hora de soporte mensual para resolver dudas o problemas)</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Renovación anual de mantenimiento (100€)</span>
                                </li>
                            </ul>
                            <a href="mailto:contacto@notasweb.me" target="_blank" class="bg-blue_button text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block mt-4"><i class="fas fa-envelope"></i> Consulta</a>
                        </div>
                    </div>
                    <!-- Plan Pro -->
                    <div>
                        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                            <h3 class="mb-4 text-2xl font-semibold">Profesional</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">PAGO ÚNICO</p>
                            <div class="flex justify-center items-baseline my-8">
                                <span class="mr-2 text-5xl font-extrabold">300 €</span>
                            </div>
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Plan Básico, además de:</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Puesta en marcha de la web con WordPress</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Diseño Responsivo y optimizado para SEO</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Sesión de introducción y formación para uso de WordPress</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Mantenimiento durante el primer año (hasta 2 horas de soporte mensual para resolver dudas o problemas menores)</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Renovación anual de mantenimiento (125€)</span>
                                </li>
                            </ul>
                            <a href="mailto:contacto@notasweb.me" target="_blank" class="bg-blue_button text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block mt-4"><i class="fas fa-envelope"></i> Consulta</a>
                        </div>
                    </div>
                    <!-- Plan Premium -->
                    <div>
                        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                            <h3 class="mb-4 text-2xl font-semibold">Premium</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">PAGO ÚNICO</p>
                            <div class="flex justify-center items-baseline my-8">
                                <span class="mr-2 text-5xl font-extrabold">500 €</span>
                            </div>
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Plan profesional, además de:</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Servicio de correo</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Hasta 3 sesiones para definir los objetivos, la estructura y las preferencias de diseño (1 hora cada sesión)</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Mantenimiento durante el primer año (hasta 4 horas de soporte mensual para resolver dudas o problemas)</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Renovación anual de mantenimiento (175€)</span>
                                </li>
                            </ul>
                            <a href="mailto:contacto@notasweb.me" target="_blank" class="bg-blue_button text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block mt-4"><i class="fas fa-envelope"></i> Consulta</a>
                        </div>
                    </div>
                    <!-- Otros Planes omitidos para brevedad -->
                </div>
            </div>
        </section>
        <section class="bg-white py-2 text-center shadow-lg w-full">
            <div class="faq-section my-2">
                <h2 class="text-center text-3xl font-bold mb-6">Preguntas Frecuentes</h2>
                <div class="max-w-3xl mx-auto">
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Qué es un dominio?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>El Servicio Básico incluye la instalación y configuración de WordPress, la instalación de un tema básico y la formación inicial para que puedas gestionar tu propio sitio web.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            Si tengo un dominio en otro hosting, ¿puedo utilizarlo?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Sí, yo te ayudaría a configuración para redireccionar las peticiones de tu dominio a tu sitio WordPress.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            Si tengo otro wordpress, ¿puedo migrar mi sitio?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Sí, yo te ayudaría a migrar tu sitio a WordPress. Y te ayudaría a configurar el dominio para redireccionar las peticiones de tu dominio a tu sitio WordPress.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            Si no tengo un dominio, ¿puedo contratar el servicio?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Sí, yo te ayudo a buscar el dominio que necesitas. Y el coste del dominio se añadiría al precio del servicio. Y la renovación se sumaría al precio de mantenimiento anual.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Qué incluye el Servicio Básico?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>El Servicio Básico incluye la instalación y configuración de WordPress, la instalación de un tema básico y la formación inicial para que puedas gestionar tu propio sitio web.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Qué tipo de soporte ofrecen?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Ofrecemos soporte técnico para ayudarte a resolver problemas menores, así como asistencia en la gestión de tu sitio web, dependiendo del servicio que hayas contratado.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Puedo cancelar mi plan en cualquier momento?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Sí, puedes cancelar tu plan en cualquier momento. Y se mantendría el servicio en funcionamiento hasta que termines la renovación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 3: Contacto -->
        <div class="text-center my-5 mt-10">
            <h4 class="text-2xl font-bold text-gray-700 mb-6">¿Interesado en nuestros servicios?</h4>
            <p class="text-xl text-gray-700 mb-6">Contáctanos para obtener más información o para programar una consulta. Escribe a <strong> <a href="mailto:contacto@notasweb.me" class="btn btn-primary"> nuestro email</a></strong>, o visita nuestro <strong><a href="{{ route('contact') }}">formulario de contacto</a></strong>.</p>
        </div>
    </main>
</x-app-layout>
