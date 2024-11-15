<x-app-layout>
    <main class="container mx-auto py-12 px-4 text-black">
        <!-- Sección 1: Título y Descripción -->
        <section class="bg-red-100 mb-24">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 py-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
                    <div class="col-span-1 py-8">
                        <div class="flex justify-center">
                            <img src="{{ asset('images/service-banner.png') }}" alt="Servicios Web" class="h-96">
                        </div>
                    </div>
                    <div class="col-span-1">
                        <h1 class="text-3xl md:text-4xl lg:text-5xl mb-4 md:mb-6 lg:mb-8 font-semibold text-center">NUESTROS SERVICIOS</h1>
                        <p class="font-semibold md:text-lg mb-6">Ofrecemos una variedad de servicios para poner en marcha tu presencia en línea. Desde la instalación básica hasta un desarrollo a medida, nuestro equipo está aquí para ayudarte a alcanzar el éxito digital.</p>
                        <div class="flex justify-center">
                            <a class="text-lg bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                               href="https://api.whatsapp.com/send?phone=51987601368&text=Quiero%20m%C3%A1s%20informaci%C3%B3n%20sobre%20tus%20servicios"
                               target="_blank">
                                <i class="fab fa-whatsapp"></i> Contáctanos
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=682177179&text=Hola%20me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n%20de%20tus%20servicios" target="_blank" class="bg-blue_button text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block"><i class="fab fa-whatsapp"></i> Consulta</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 2: Ventajas de tener un sitio web -->
        <section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 mb-24">
                <div>
                    <h2 class="text-3xl md:text-4xl mb-4 md:mb-6 lg:mb-8 font-semibold text-center">VENTAJAS DE TENER UN SITIO WEB</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="bg-white rounded shadow px-8 py-12">
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('images/benefit1.png') }}" class="w-24" alt="">
                            </div>
                            <h3 class="text-center font-semibold text-lg">CAPTA MÁS CLIENTES</h3>
                            <p>Gestiona fácilmente el contenido (texto e imágenes) de tu sitio web, con una interfaz súper amigable.</p>
                        </div>
                        <div class="bg-white rounded shadow px-8 py-12">
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('images/benefit2.png') }}" class="w-24" alt="">
                            </div>
                            <h3 class="text-center font-semibold text-lg">REDUCE COSTOS</h3>
                            <p>Olvídate de los gastos de impresión y distribución de tu tienda. Llega a más personas sin mucho esfuerzo.</p>
                        </div>
                        <div class="bg-white rounded shadow px-8 py-12">
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('images/benefit3.png') }}" class="w-24" alt="">
                            </div>
                            <h3 class="text-center font-semibold text-lg">NUEVO CANAL DE VENTAS</h3>
                            <p>Sistema de venta en línea que te permite estar presente las 24 horas del día, los 365 días del año.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 3: Nuestros Planes -->
        <section>
            <div class="bg-indigo-400 py-20 text-white">
                <h2 class="text-3xl md:text-4xl mb-4 md:mb-6 text-center font-semibold">NUESTROS PLANES</h2>
                <p class="text-center text-lg">Elige el Plan que más se acomode a tus necesidades</p>
            </div>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                    <h2 class="text-3xl md:text-4xl mb-4 md:mb-6 tracking-tight font-extrabold text-gray-900 dark:text-white">Tenemos la solución ideal para ti</h2>
                    <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Ya sea que necesites una página de aterrizaje, una tienda virtual o un desarrollo a medida, estamos aquí para ayudarte.</p>
                </div>
                <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0 mb-12">
                    <!-- Plan Básico -->
                    <div>
                        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                            <h3 class="mb-4 text-2xl font-semibold">Básico</h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">PAGO ÚNICO</p>
                            <div class="flex justify-center items-baseline my-8">
                                <span class="mr-2 text-5xl font-extrabold">150 €</span>
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
                                    <span>Optimización SEO</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Diseño Responsivo</span>
                                </li>
                            </ul>
                            <a href="https://api.whatsapp.com/send?phone=51987601368&text=Hola,%20necesito%20que%20me%20implementes%20un%20Landing%20page" target="_blank" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-blue-900"><i class="fab fa-whatsapp"></i> Consulta</a>
                        </div>
                    </div>
                    <!-- Otros Planes omitidos para brevedad -->
                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-20 text-center">
        <div class="faq-section my-10">
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
        <div class="text-center my-5">
            <h4 class="text-2xl font-bold text-gray-700 mb-6">¿Interesado en nuestros servicios?</h4>
            <p class="text-xl text-gray-700 mb-6">Contáctanos para obtener más información o para programar una consulta. Escribe a <strong> <a href="mailto:contacto@notasweb.me" class="btn btn-primary"> nuestro email</a></strong>, o visita nuestro <strong><a href="{{ route('contact') }}">formulario de contacto</a></strong>.</p>
        </div>
    </main>
</x-app-layout>
