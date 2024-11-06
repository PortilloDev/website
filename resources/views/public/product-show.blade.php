<x-app-layout>
    <main class="container mx-auto py-12 px-4">
        <!-- Título y Descripción Principal -->
        <section class="bg-white shadow p-6 rounded-lg mb-12">
            <h1 class="text-4xl font-bold mb-4 text-black">{{ $product->title }}</h1>
            <hr>
            <br>
            @php
                $resources = explode("\n", $product->description);
                $resources = array_filter($resources);
            @endphp
            @foreach($resources as $resource)
                <p class="text-xl text-gray-700 mb-6">{{ $resource }}</p>
            @endforeach

        </section>

        <!-- Detalle del Producto -->

        <section class="bg-white shadow p-6 rounded-lg mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Imagen del Producto -->
                <div>
                    <img src="{{asset('/storage/'.$product->image_url)}}" width="600" height="800" alt="Imagen del Producto" class="w-full h-auto rounded-lg">
                </div>
                <!-- Información del Producto -->
                <div>
                    <div class="mt-8">
                        <h2 class="text-2xl font-bold mb-4 text-black">Sinopsis</h2>
                        @php
                            $resources = explode("\n", $product->summary);
                            $resources = array_filter($resources);
                        @endphp
                        @foreach($resources as $resource)
                            <p class="text-gray-700 mb-6"> {{ $resource  }}</p>
                        @endforeach

                        <h2 class="text-2xl font-bold mb-4 text-black">Temas claves del libro</h2>
                        <ul class="list-disc list-inside text-gray-700">
                            @php
                                $resources = explode("\n", $product->themes);
                                $resources = array_filter($resources);
                            @endphp
                            @foreach($resources as $resource)
                                <li>{{ $resource }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mt-8">
                        <p class="text-2xl font-bold text-blue-700 mb-4">{{ $product->price }} €</p>
                        <a href="{{ $product->url_externa }}" class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600 inline-block">Comprar</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Formulario de Suscripción al Newsletter -->
        <x-newsletter-form :source="$source" :tags="$tags" :product="$product" />
    </main>

</x-app-layout>
