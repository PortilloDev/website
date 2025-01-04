@extends('layouts.guest')

@section('title', 'Verifica tu Email')

@section('content')
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Verifica tu Email</h1>

            <p class="text-gray-600 text-center mb-4">
                Hemos enviado un correo a <strong>{{ auth()->user()->email }}</strong>.
                Por favor, verifica tu email haciendo clic en el enlace del correo.
            </p>

            <p class="text-gray-600 text-center mb-6">
                Si no has recibido el correo, puedes solicitar uno nuevo.
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="text-green-500 text-center mb-4">
                    Se ha enviado un nuevo enlace de verificación a tu correo.
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit"
                        class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150">
                    Enviar de nuevo el correo
                </button>
            </form>

            <div class="text-center mt-6">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="text-gray-600 hover:text-gray-900 underline">
                    Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
