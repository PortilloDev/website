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
                                <span class="mr-2 text-5xl font-extrabold">200 €</span>
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
                                    <span>Mantenimiento durante el primer año (hasta 1 hora de soporte mensual para resolver dudas o problemas menores)</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Renovación anual de mantenimiento (100 €)</span>
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
                                <span class="mr-2 text-5xl font-extrabold">400 €</span>
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
                                    <span>Renovación anual de mantenimiento (200 €)</span>
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
                                <span class="mr-2 text-5xl font-extrabold">700 €</span>
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
                                    <span>Mantenimiento durante el primer año (hasta 3 horas de soporte mensual para resolver dudas o problemas)</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span>Renovación anual de mantenimiento (300 €)</span>
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
                            <p>Un dominio es el nombre único que identifica a tu sitio web en internet (como www.artesanosdelcodigo.net). Es la dirección que las personas ingresan en su navegador para visitar tu página. Nosotros te ayudamos a elegir y configurar un dominio que se adapte a tu marca y objetivos.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            Si tengo un dominio en otro hosting, ¿puedo utilizarlo?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>¡Claro que sí! Si ya tienes un dominio registrado en otro proveedor de hosting, podemos ayudarte a configurarlo para que funcione con nuestro servicio. Nos encargamos de hacer todos los ajustes necesarios para que tu dominio esté enlazado correctamente con tu nueva web.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            Si tengo otro wordpress, ¿puedo migrar mi sitio?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p> Sí, ofrecemos el servicio de migración para sitios web en WordPress. Si ya tienes un sitio en otro servidor, podemos trasladarlo a nuestro hosting de manera segura, conservando tu contenido y configuración. La migración puede incluir, si lo deseas, la optimización de SEO y redirecciones para que no pierdas tu posicionamiento en buscadores.
                            </p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Qué incluye el Servicio Básico?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>El Servicio Básico incluye la instalación y configuración de WordPress, es apropiado para personas que ya tienen un conocimiento avanzado de WordPress y quieren agregar un sitio web personalizado y autogestionado.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Qué tipo de soporte ofrecen?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Ofrecemos soporte personalizado en función del paquete contratado. Para el servicio básico, incluimos soporte para problemas menores y dudas puntuales. En los planes Plus y Premium, ampliamos el soporte para cubrir necesidades adicionales y responder de forma prioritaria. Nuestro objetivo es que siempre te sientas acompañado y respaldado.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Puedo cancelar mi plan en cualquier momento?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Sí, puedes cancelar tu plan en cualquier momento. Solo te pedimos que nos avises con antelación para facilitar la transición y brindarte ayuda en el proceso de migración o cierre del servicio, si lo necesitas. Queremos que tengas control total sobre tu servicio.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Qué diferencia hay entre los planes Básico, Plus y Premium?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Cada plan está diseñado para adaptarse a diferentes necesidades. El plan Básico es ideal para quienes ya tienen conocimientos con Wordpress y solo necesitan un alojamiento. El plan Plus incluye una estructura de sitio más completa, con páginas adicionales y formularios de captación. El plan Premium ofrece una configuración avanzada con tienda en línea y optimización SEO. Puedes ver todos los detalles en nuestra sección de servicios.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Cómo es el proceso de creación del sitio web?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>El proceso es sencillo y comienza con una reunión para conocer tus necesidades. Luego, configuramos el hosting, el dominio y el WordPress. Creamos el diseño de la web, te brindamos formación para que puedas gestionar tu contenido, y ofrecemos soporte continuo para garantizar que todo funcione correctamente. Te acompañamos en cada paso para que la experiencia sea positiva y sin complicaciones.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Cuánto tiempo toma tener mi sitio web listo?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>El tiempo de creación depende del plan que elijas y de la complejidad de la web. Para el plan Básico, el sitio puede estar listo en una semana. Los planes Plus y Premium, que incluyen más funcionalidades, pueden tomar entre 2 y 4 semanas. Siempre nos esforzamos por ofrecer un servicio rápido sin comprometer la calidad.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Qué pasa si necesito una funcionalidad específica en mi sitio?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Si necesitas funcionalidades especiales, como integraciones de sistemas de pago, CRM, o cualquier otra personalización, ofrecemos un servicio de desarrollo a medida. Analizamos tus necesidades y proponemos soluciones adaptadas a tus objetivos. Nos aseguramos de que tu sitio tenga todo lo necesario para que funcione como deseas.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Cómo funciona el mantenimiento anual después del primer año?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>El mantenimiento anual incluye actualizaciones de seguridad, plugins y temas, así como monitoreo básico para asegurar que tu sitio funcione sin problemas. En los planes Plus y Premium, también ofrecemos soporte prioritario y optimización de rendimiento. Nuestro objetivo es mantener tu sitio seguro y actualizado para que siempre esté en óptimas condiciones.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Por qué es importante tener una web actualizada y segura?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Mantener tu web actualizada y segura es crucial para evitar problemas técnicos y protegerla contra amenazas de seguridad. Las actualizaciones de plugins y temas mejoran la funcionalidad y protegen contra vulnerabilidades. Con nuestro servicio de mantenimiento, te aseguramos que tu sitio esté siempre protegido y funcionando al máximo.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="mb-4 border-b-2 border-gray-300 pb-4">
                        <button @click="open = !open" class="w-full text-left font-semibold text-lg">
                            ¿Puedo mejorar o cambiar mi plan más adelante?
                        </button>
                        <div x-show="open" class="mt-2">
                            <p>Sí, puedes mejorar o cambiar de plan en cualquier momento. Si empiezas con el plan Básico y en el futuro necesitas una tienda en línea o una estructura más avanzada, puedes actualizar tu plan. Te ayudamos a hacer el cambio de manera sencilla para que siempre tengas el soporte adecuado para tus necesidades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 3: Contacto -->
        <div class="text-center my-5 mt-10">
            <h4 class="text-2xl font-bold text-gray-700 mb-6">¿Interesado en nuestros servicios?</h4>
            <p class="text-xl text-gray-700 mb-6">Contáctanos para obtener más información o para programar una consulta. Escribe a <strong> <a href="mailto:contacto@notasweb.me" class="btn btn-primary"> nuestro email</a></strong>.</p>
        </div>
    </main>
</x-app-layout>
