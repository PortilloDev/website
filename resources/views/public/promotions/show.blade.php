<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $promotion->title }}</title>
</head>
<body class="flex flex-col bg-indigo-900">
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-indigo-900 shadow-md rounded-lg overflow-hidden w-full lg:w-3/4 p-8">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 mb-8 lg:mb-0 lg:mr-8">
                <img class="w-full h-full object-cover rounded-md" src="{{ asset('/storage/'.$promotion->thumbnail) }}" alt="{{ $promotion->title }}">
            </div>
            <div class="lg:w-1/2">
                <h1 class="text-4xl font-bold text-blue-700 mb-6">{{ $promotion->title }}</h1>
                <p class="text-gray-700 mb-6">{{ $promotion->description }}</p>
                <div class="aspect-w-16 aspect-h-9 mb-6">
                    {!! $promotion->embed_code !!}
                </div>
                <x-newsletter-form />
            </div>
        </div>
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Otros Productos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 shadow-md rounded-md">
                    <h3 class="text-xl font-semibold mb-2">Producto 1</h3>
                    <p class="text-gray-600">Descripción breve del producto 1.</p>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <h3 class="text-xl font-semibold mb-2">Producto 2</h3>
                    <p class="text-gray-600">Descripción breve del producto 2.</p>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <h3 class="text-xl font-semibold mb-2">Producto 3</h3>
                    <p class="text-gray-600">Descripción breve del producto 3.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
