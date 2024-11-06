<x-layout>
    <section class="bg-white rounded shadow p-4 mb-4">
        <h2 class="text-2xl font-bold mb-1 text-center text-blue-600">{{ $hilo->titulo }}</h2>
        <h3 class="text-xl font-bold mb-4 text-center text-blue-600">{{ $hilo->descripcion }}</h3>
        <div class="grid grid-cols-1 gap-4">
            @foreach ($respuestas as $respuesta)
                <div class="bg-gray-50 border border-gray-200 rounded p-4 hover:shadow">
                    <div class="flex items-center mb-2">
                        <img class="w-10 h-10 rounded-full ring-2 ring-gray-300" src="{{ $respuesta->usuario->avatar ?? Vite::asset('resources/images/user_default.webp') }}" alt="Avatar del usuario">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-blue-600">{{ $respuesta->usuario->username ?? 'Usuario Anónimo' }}</h3>
                            <p class="text-sm text-gray-500">Publicado el: {{ $respuesta->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                    <p class="text-gray-700">{{ $respuesta->contenido }}</p>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
