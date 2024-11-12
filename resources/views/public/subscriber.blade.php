<x-app-layout>
    <!-- Sección del Banner Principal -->
    <section class="hero bg-white bg-center text-center shadow-md rounded-lg overflow-hidden w-full p-8">
        <div class="py-24">
            <h1 class="text-5xl font-extrabold text-black mb-4">{{ $product->name }}</h1>
        </div>
    </section>

    <main class="container mx-auto py-12 px-4 text-black">
        <!-- Sección de Detalles del Recurso Gratuito -->
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6 text-black">Acerca del Recurso</h2>
            <p class="text-lg text-gray-700">{!! $product->description !!}</p>
        </section>

        <!-- Formulario de Suscripción al Newsletter -->
        <section class="bg-blue_button text-black py-12 px-4 rounded-lg border-gray-100 text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">¡Accede a este contenido completando tus datos!</h2>
            <h3 class="text-xl font-bold mb-4">Prometemos enviarte solo contenido valioso, sin spam 😊</h3>
            <p class="text-lg mb-6">{!! $product->summnary !!}</p>
            <form action="/newsletter" method="POST" class="flex flex-col space-y-4 md:space-y-0 md:grid md:grid-cols-3 md:gap-6 justify-center">
                @csrf
                <input type="text" name="name" class="w-full md:w-full px-4 py-3 border-2 border-gray-100 rounded-md text-black shadow-lg " placeholder="Tu nombre" required>
                <input type="email" name="email" class="w-full md:w-full px-4 py-3 border-2 border-gray-100 rounded-md text-black shadow-lg " placeholder="Tu correo electrónico" required>

                <!-- Campo oculto para el source -->
                <input type="hidden" name="source" value="{{ $product->product_type_id }}">
                <input type="hidden" name="tags" value="{{ $product->tags()->pluck('name')->implode(',') }}">
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <button type="submit" class="bg-indigo-500 text-white px-8 py-3 rounded-md hover:bg-indigo-900 shadow-lg">Suscribirme</button>
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
