<x-app-layout>
    <!-- Sección del Banner Principal -->
    <section class="hero bg-cover bg-center text-center mb-12" style="background-color: #fadb78;">
        <div class="py-24">
            <h1 class="text-5xl font-extrabold text-black mb-4">{{ $promotion->title }}</h1>
        </div>
    </section>

    <main class="container mx-auto py-12 px-4">
        <!-- Sección de Detalles del Recurso Gratuito -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6 text-black">Acerca del Recurso</h2>
            <p class="text-lg text-gray-700">{{ $promotion->description }}</p>
        </section>

        <!-- Sección para el Embebido de Videos o Presentaciones -->
        @if($promotion->embed_code)
            <section class="flex flex-col items-center text-center mb-12">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    {!! $promotion->embed_code !!}
                </div>
            </section>
        @endif

        <!-- Formulario de Suscripción al Newsletter -->
        <section class="bg-blue_button text-white py-12 px-4 rounded-lg text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Descarga el Recurso Gratis</h2>
            <p class="text-lg mb-6">Para acceder al recurso, por favor suscríbete a nuestro newsletter. Obtendrás actualizaciones y noticias directamente en tu bandeja de entrada.</p>
            <form action="/newsletter" method="POST" class="flex flex-col space-y-4 md:space-y-0 md:grid md:grid-cols-3 md:gap-6 justify-center">
                @csrf
                <input type="text" name="name" class="w-full md:w-full px-4 py-3 rounded-md" placeholder="Tu nombre" value="{{ old('name') }}" required>
                <input type="email" name="email" class="w-full md:w-full px-4 py-3 rounded-md" placeholder="Tu correo electrónico" value="{{ old('email') }}" required>
                <button type="submit" class="bg-light text-black px-8 py-3 rounded-md hover:bg-yellow-600">Suscribirme</button>
            </form>

            @if(session('error'))
                <div class="text-red-500 mt-4">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="text-green-500 mt-4">
                    {{ session('success') }}
                </div>
            @endif
        </section>
    </main>
</x-app-layout>
