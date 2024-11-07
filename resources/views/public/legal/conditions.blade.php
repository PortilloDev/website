<x-app-layout>
    <main class="container mx-auto py-12 px-4 text-black">
        <h1 class="text-3xl font-bold mb-4 text-center">Términos y Condiciones</h1>
        <p class="text-sm text-gray-500 mb-8 text-center">Última actualización: {{ date('d/m/Y') }}</p>

        <div class="prose max-w-none">
            <!-- Introducción -->
            <h2 class="text-xl font-bold mb-2 mt-6 text-black">Introducción</h2>
            <p class="text-md text-gray-700 mb-6">
                Al acceder y utilizar este sitio web, aceptas cumplir y estar sujeto a los siguientes términos y condiciones. Si no estás de acuerdo con alguna parte de estos términos, no debes utilizar nuestro sitio web.
            </p>
            <p class="text-md text-gray-700 mb-6">
                Estos términos y condiciones describen las reglas y regulaciones para el uso del sitio web <strong>Artesanos del Código</strong>, propiedad de <strong>Iván Portillo Pérez</strong>, ubicado en <strong>Calle Valverde de los Arroyos, 1, 2C. Fuenlabrada 28944 - Madrid (España)</strong>.
            </p>

            <!-- Información General -->
            <h2 class="text-xl font-bold mb-2 mt-6 text-black">Información General</h2>
            <ul>
                <li><strong>Responsable Legal:</strong> Iván Portillo Pérez</li>
                <li><strong>Dirección:</strong> Calle Valverde de los Arroyos, 1, 2C. Fuenlabrada 28944 - Madrid (España)</li>
                <li><strong>Correo Electrónico:</strong> <a href="mailto:ivan.portillo@notasweb.me" class="text-blue-500">ivan.portillo@notasweb.me</a></li>
            </ul>

            <!-- Objeto y Ámbito de Aplicación -->
            <h2 class="text-xl font-bold mb-2 mt-6 text-black">Objeto y Ámbito de Aplicación</h2>
            <p class="text-md text-gray-700 mb-6">
                Estos términos y condiciones regulan el acceso y uso del sitio web <strong>Artesanos del Código</strong>, dedicado a la promoción de recursos de programación y marketing, tanto gratuitos como de pago, venta de libros y servicios, y promoción de podcasts.
            </p>

            <!-- Condiciones de Uso -->
            <h2 class="text-xl font-bold mb-2 mt-6 text-black">Condiciones de Uso</h2>
            <ol class="list-decimal list-inside">
                <li>
                    <strong>Aceptación de los Términos:</strong> Al utilizar este sitio web, declaras haber leído y aceptado estos términos y condiciones.
                </li>
                <li>
                    <strong>Uso Permitido:</strong> El usuario se compromete a utilizar el sitio web de manera lícita, conforme a lo establecido en estos términos, sin perjudicar los derechos o intereses de terceros.
                </li>
                <li>
                    <strong>Propiedad Intelectual:</strong> Todos los contenidos del sitio web (textos, imágenes, gráficos, logotipos, iconos, software, etc.) son propiedad exclusiva de <strong>Iván Portillo Pérez</strong> o de terceros que han autorizado su uso, y están protegidos por la legislación vigente en materia de propiedad intelectual e industrial.
                </li>
                <li>
                    <strong>Enlaces a Terceros:</strong> Este sitio web puede contener enlaces a otros sitios de interés. No tenemos control sobre el contenido de esos sitios y no nos hacemos responsables de la información que proporcionen.
                </li>
                <li>
                    <strong>Limitación de Responsabilidad:</strong> <strong>Artesanos del Código</strong> no será responsable de los daños o perjuicios que pudieran derivarse del uso de la información contenida en este sitio web.
                </li>
                <li>
                    <strong>Modificaciones:</strong> Nos reservamos el derecho de modificar o actualizar estos términos y condiciones en cualquier momento. Los cambios serán efectivos desde el momento de su publicación en el sitio web.
                </li>
                <li>
                    <strong>Jurisdicción y Ley Aplicable:</strong> La relación entre <strong>Iván Portillo Pérez</strong> y el usuario se regirá por la normativa española vigente, y cualquier controversia se someterá a los juzgados y tribunales de Madrid.
                </li>
            </ol>

            <!-- Datos Personales -->
            <h2 class="text-xl font-bold mb-2 mt-6 text-black">Datos Personales</h2>
            <p class="text-md text-gray-700 mb-6">
                El tratamiento de tus datos personales se regirá por lo establecido en nuestra <a href="{{ route('privacy') }}" class="text-blue-500">Política de Privacidad</a>, que debes leer y aceptar.
            </p>

            <!-- Política de Cookies -->
            <h2 class="text-xl font-bold mb-2 mt-6 text-black">Política de Cookies</h2>
            <p class="text-md text-gray-700 mb-6">
                Este sitio web utiliza cookies. Para más información, consulta nuestra <a href="{{ route('cookies') }}" class="text-blue-500">Política de Cookies</a>.
            </p>

            <!-- Contacto -->
            <h2 class="text-xl font-bold mb-2 mt-6 text-black">Contacto</h2>
            <p class="text-md text-gray-700 mb-6">
                Si tienes alguna pregunta sobre estos términos y condiciones, puedes contactar a través de:
            </p>
            <ul class="list-disc list-inside">
                <li><strong>Correo Electrónico:</strong> <a href="mailto:ivan.portillo@notasweb.me" class="text-blue-500">ivan.portillo@notasweb.me</a></li>
                <li><strong>Dirección:</strong> Calle Valverde de los Arroyos, 1, 2C. Fuenlabrada 28944 - Madrid (España)</li>
            </ul>
        </div>
    </main>
</x-app-layout>
