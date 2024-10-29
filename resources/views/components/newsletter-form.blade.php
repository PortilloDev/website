<section class="bg-blue_button text-white py-12 px-4 rounded-lg text-center mb-12">
    <h2 class="text-3xl font-bold mb-4">¡Únete a Nuestra Comunidad de Artesanos!</h2>
    <p class="text-lg mb-6">Suscríbete a nuestra newsletter y sé parte de una comunidad apasionada por el código. Recibe en tu correo los últimos episodios del podcast, recursos exclusivos, consejos y mucho más para seguir creciendo como desarrollador.</p>
    <form action="/newsletter" method="POST" class="flex flex-col space-y-4 md:space-y-0 md:grid md:grid-cols-3 md:gap-6 justify-center">
        @csrf
        <input type="text" name="name" class="w-full md:w-full px-4 py-3 rounded-md" placeholder="Tu nombre" required>
        <input type="email" name="email" class="w-full md:w-full px-4 py-3 rounded-md" placeholder="Tu correo electrónico" required>
        @error('email')
        <div class="col-span-3 text-red-500 mt-2">
            {{ $message }}
        </div>
        @enderror
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
