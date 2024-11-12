<x-app-layout>
    <main class="container mx-auto py-12 px-4 text-black">
        <!-- Título y Descripción Principal -->
        <section class="bg-white shadow p-6 rounded-lg mb-12">
            <h1 class="text-4xl font-bold mb-4 text-black">{!! $product->name !!}</h1>
            <hr>
            <br>
            <p class="text-xl text-black mb-6">{!! $product->description !!}</p>

        </section>

        <!-- Detalle del Producto -->

        <section class="bg-white shadow p-6 rounded-lg mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Imagen del Producto -->
                <div>
                    <img src="{{asset('/storage/'.$product->image)}}" width="600" height="800" alt="Imagen del Producto" class="w-full h-auto rounded-lg">
                </div>
                <!-- Información del Producto -->
                <div>
                    <div class="mt-8">
                        <h2 class="text-2xl font-bold mb-4 text-black">Sinopsis</h2>
                        <p class="text-gray-700 mb-6"> {!! $product->summary !!}</p>

                        <h2 class="text-2xl font-bold mb-4 mt-4 text-black">Temas claves del libro</h2>
                        {!! $product->themes !!}
                    </div>
                    <div class="mt-8">
                        <p class="text-2xl font-bold text-blue-700 mb-4"> {{ $product->is_free ? 'Gratis' :  $product->price .' €'}}  </p>
                        @if(!$product->is_published)
                            <a href="#" class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600 inline-block">Próximamente</a>
                        @else
                            @if($product->is_free)
                                <a href="{{route('subscriber',['slug' => $product->slug])}}" class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600 inline-block">Descargar</a>
                            @else
                                <a href="{{ $product->external_url }}" target="_blank" class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600 inline-block">Obtener el libro</a>
                            @endif
                        @endif


                    </div>
                </div>
            </div>
        </section>
        <!-- Formulario de Suscripción al Newsletter -->
        <x-newsletter-form :source="$source" :tags="$tags" :product="$product" />
    </main>

</x-app-layout>
