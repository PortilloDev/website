<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title class="text-white">{{ $promotion->title }}</title>
</head>
<body class="flex flex-col bg-white">
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-secondary shadow-md rounded-lg overflow-hidden w-full lg:w-3/4 p-8">
        <div class="mt-12 text-center">
            <h1 class="text-5xl font-bold text-indigo-900 mb-6">{{ $promotion->title }}</h1>
        </div>
        <div class="mt-12">
            <img class="sm:w-full h-1/2 object-cover rounded-md" src="{{ asset('/storage/'.$promotion->image) }}" alt="{{ $promotion->title }}">
        </div>
        <div class="flex flex-col lg:flex-row">

            <div class="lg:w-full">
                <p class="text-white mb-6">{!! $promotion->description !!}</p>
                <div class="aspect-w-16 aspect-h-9 mb-6">
                    {!! $promotion->embed_code !!}
                </div>
                <section class="bg-blue_button text-black py-12 px-4 rounded-lg border-gray-100 text-center mb-12">
                    <h2 class="text-3xl font-bold mb-4">¡Únete a Nuestra Comunidad de Artesanos!</h2>
                    <p class="text-lg mb-6">{!! $promotion->embed_code !!}</p>
                    <form action="/newsletter" method="POST" class="flex flex-col space-y-4 md:space-y-0 md:grid md:grid-cols-3 md:gap-6 justify-center">
                        @csrf
                        <input type="text" name="name" class="w-full md:w-full px-4 py-3 border-2 border-gray-100 rounded-md text-black shadow-lg " placeholder="Tu nombre" required>
                        <input type="email" name="email" class="w-full md:w-full px-4 py-3 border-2 border-gray-100 rounded-md text-black shadow-lg " placeholder="Tu correo electrónico" required>

                        <!-- Campo oculto para el source -->
                        <input type="hidden" name="source" value="{{ $promotion->type }}">
                        <input type="hidden" name="tags" value="{{ $promotion->tags()->pluck('name')->implode(',') }}">
                        <input type="hidden" name="promotion_id" value="{{ $promotion->id }}">

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

            </div>
        </div>
        <div class="mt-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 shadow-md rounded-md">
                    <a href="{{route('privacy')}}" class="hover:underline">Política de Privacidad</a>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <a href="{{route('conditions')}}" class="hover:underline">Términos y Condiciones</a>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <a href="{{route('cookies')}}" class="hover:underline">Política de Cookies</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
