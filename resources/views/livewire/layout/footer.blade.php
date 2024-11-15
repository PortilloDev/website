<footer class="bg-secondary text-black py-6">
    <div class="container mx-auto text-center">
        <p>&copy; {{now()->format('Y')}} <strong>Artesanos del Código</strong>. Todos los derechos reservados.</p>
        <nav class="flex justify-center space-x-4 mt-4">
            <a href="{{route('privacy')}}" class="hover:underline">Política de Privacidad</a>
            <a href="{{route('conditions')}}" class="hover:underline">Términos y Condiciones</a>
            <a href="{{route('cookies')}}" class="hover:underline">Política de Cookies</a>
        </nav>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="https://www.facebook.com/profile.php?id=61556931680867" target="_blank" class="text-black hover:text-blue-500">Facebook</a>
            <a href="https://www.instagram.com/artesanosdelcodigo/" target="_blank" class="text-black hover:text-blue-500">Instagram</a>
            <a href="https://www.linkedin.com/in/ivan-portillo-perez/" target="_blank" class="text-black hover:text-blue-500">LinkedIn</a>
            <a href="https://notasweb.me" target="_blank" class="text-black hover:text-blue-500">Blog</a>
        </div>
    </div>
</footer>
