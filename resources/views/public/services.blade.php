<x-app-layout>
    <main class="container mx-auto py-12 px-4 text-black">
        <div class="text-center mb-5">
            <h1 class="text-4xl font-bold mb-4 text-black">Nuestros Servicios</h1>
            <p class="mb-3 text-gray-600 dark:text-gray-700 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-black first-letter:me-3 first-letter:float-start">¿Quieres tener tu propio espacio en internet, sin complicaciones y con la seguridad de un hosting confiable como Hostinger?
                Si tienes un producto o servicio que deseas mostrar al mundo, yo me encargo ayudarte de ponerlo en funcionamiento y asesorarte de los siguientes pasos. Desde la creación de tu sitio web optimizado para motores de búsqueda, hasta herramientas de IA que facilitan la gestión de tu contenido, hago que el proceso sea simple para ti. Solo necesitas tu dominio, y juntos haremos que tu presencia en línea destaque.dominio, y juntos haremos que tu presencia en línea destaque</p>
        </div>

        <!-- Sección 2: Modalidades de Servicio -->
        <div class="services-section">
            <div class="flex flex-col md:flex-row justify-center gap-8">
                <div class="w-full md:w-1/3 bg-gray-800 text-white p-8 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="{{ asset('images/basic-plan-icon.png') }}" alt="Plan Mensual" class="w-24 h-24 mb-4">
                    <h3 class="text-2xl font-bold mb-2">Servicio Básico (175€)</h3>
                    <ul class="list-unstyled">
                        <li>✔ Puesta en marcha de la web con WordPress:</li>
                        <li> - Instalación y configuración de WordPress.</li>
                        <li> - Instalación de un tema básico (gratuito o ligero de pago).</li>
                        <li> - Configuración inicial de una estructura de sitio simple (p. ej., página de inicio, página de contacto, y hasta 3 secciones adicionales).</li>
                        <li> - Instalación y configuración de plugins básicos: SEO, seguridad, optimización de rendimiento, y formulario de contacto.</li>
                        <li>✔ Formación inicial:</li>
                        <li> - Sesión 1: Reunión de planificación (1 hora).</li>
                        <li> - Sesión 2: Introducción a WordPress (1 hora).</li>
                        <li> - Sesión 3: Gestión de plugins y seguridad (1 hora).</li>
                        <li>✔ Mantenimiento durante el primer año:</li>
                        <li> - Actualización mensual de plugins y temas.</li>
                        <li> - Monitoreo básico de seguridad.</li>
                        <li> - Soporte técnico limitado.</li>
                        <li>✔ Renovación anual de mantenimiento (30€):</li>
                        <li> - Actualizaciones, mantenimiento de seguridad y soporte técnico básico.</li>
                    </ul>
                </div>
                <!-- Repetir la estructura de tarjeta para otros dos servicios -->
                <div class="w-full md:w-1/3 bg-gray-800 text-white p-8 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="{{ asset('images/basic-plan-icon.png') }}" alt="Plan Mensual" class="w-24 h-24 mb-4">
                    <h3 class="text-2xl font-bold mb-2">Servicio Básico (175€)</h3>
                    <p class="text-sm mb-4">Acceso a todos los cursos por 1 mes (renovación automática).</p>
                    <p class="text-green-400 font-bold mb-4">Ideal para probar el contenido sin compromiso.</p>
                    <ul class="text-left space-y-2 mb-6">
                        <li>✔ Acceso a nuevas lecciones cada semana</li>
                        <li>✔ Acceso al foro de preguntas</li>
                        <li>✔ Acceso a los repositorios de código (GITHUB)</li>
                        <li>✔ Puedes cancelar en cualquier momento</li>
                    </ul>
                    <button class="bg-teal-500 hover:bg-teal-700 text-white py-2 px-4 rounded">
                        Seleccionar Plan Mensual
                    </button>
                    <p class="text-xs mt-4">* Precios en USD</p>
                </div>
                <div class="w-full md:w-1/3 bg-gray-800 text-white p-8 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="{{ asset('images/premium-plan-icon.png') }}" alt="Plan Supremo" class="w-24 h-24 mb-4">
                    <h3 class="text-2xl font-bold mb-2">Servicio Avanzado (350€)</h3>
                    <p class="text-sm mb-4">Acceso a todos los cursos de por vida (sin renovación).</p>
                    <p class="text-green-400 font-bold mb-4">Acceso de por vida para garantizar tu crecimiento profesional continuo.</p>
                    <ul class="text-left space-y-2 mb-6">
                        <li>✔ Acceso a nuevas lecciones cada semana</li>
                        <li>✔ Acceso al foro de preguntas</li>
                        <li>✔ Acceso a los repositorios de código (GITHUB)</li>
                    </ul>
                    <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded">
                        Seleccionar Plan Supremo
                    </button>
                    <p class="text-xs mt-4">* Precios en USD</p>
                </div>
            </div>
        </div>
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

        <!-- Sección 3: Contacto -->
        <div class="text-center my-5">
            <h4 class="text-2xl font-bold text-gray-700 mb-6">¿Interesado en nuestros servicios?</h4>
            <p class="text-xl text-gray-700 mb-6">Contáctanos para obtener más información o para programar una consulta. Escribe a <strong> <a href="mailto:ivan.portillo@notasweb.me" class="btn btn-primary"> nuestro email</a></strong>, o visita nuestro <strong><a href="{{ route('contact') }}">formulario de contacto</a></strong>.</p>
        </div>
    </main>
</x-app-layout>
