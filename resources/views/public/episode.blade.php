<x-app-layout>
    <!-- Sección del Banner del Episodio -->
    <section class="hero bg-light text-center mb-12">
        <div class="py-24">
            <h1 class="text-5xl font-extrabold text-black mb-4">{{ $episode->title }}</h1>
        </div>
    </section>

    <main class="container mx-auto py-12 px-4">
        <!-- Sección del Embebido del Audio -->
        <section class="flex flex-col items-center text-center mb-12">
            <div class="w-full md:w-3/4 lg:w-1/2">
                {!! $episode->embedded !!}
            </div>
        </section>
        <hr class="text-center bold border-2">
        <!-- Sección de la Descripción del Episodio -->
        <section class="text-center mb-12 mt-12">
            <h2 class="text-3xl font-bold mb-6 text-black">Descripción del Episodio</h2>
            @php
                $resources = explode("\n", $episode->description);
                $resources = array_filter($resources);
            @endphp
            @foreach($resources as $resource)
                <p class="text-black">{{ $resource }}</p>
            @endforeach

        </section>

        <!-- Formulario de Suscripción al Newsletter -->
        <x-newsletter-form :source="$source" :tags="$tags" :episode="$episode" />
    </main>
</x-app-layout>
