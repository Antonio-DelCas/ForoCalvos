{{-- {{ $respuestas }}
{{ $respuestas[0] }}
{{ $respuestas[0]->user->name }} --}}
<x-layout>
    <section class="bg-white rounded shadow p-4 mb-4">
        <h2 class="text-2xl font-bold mb-1 text-center text-orange-600">{{ $hilo->titulo }}</h2>
        <h3 class="text-xl font-bold mb-4 text-center text-orange-600">{{ $hilo->descripcion }}</h3>
        <!-- Mensajes de éxito o error después de eliminar una respuesta -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                {{ session('error') }}
            </div>
        @endif
        <div id="respuesta-contenedor" class="grid grid-cols-1 gap-4">
            @foreach ($respuestas as $respuesta)
                <div class="bg-gray-50 border border-gray-200 rounded p-4 hover:shadow">
                    <div class="flex items-center mb-2">
                        <img class="w-10 h-10 rounded-full object-cover ring-2 ring-gray-300"
                            src="{{ asset('/storage/' . $respuesta->user->imagen) }}" alt="Avatar del usuario">
                        <div class="ml-4">
                            <a href="/perfil-usuario/{{$respuesta->user->id}}">
                                <h3 class="text-lg font-semibold text-orange-600">{{ $respuesta->user->name }} </h3>
                            </a>
                            <p class="text-sm text-gray-500">Publicado el:
                                {{ $respuesta->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                    <p class="text-gray-700">{{ $respuesta->contenido }}</p>
                    <!-- Verificamos si el usuario logeado es administrador para mostrarle el botón eliminar comentario -->
                    @if (auth()->check() && auth()->user()->is_admin)
                        <form action="{{ route('respuestas.eliminar') }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="respuesta_id" value="{{ $respuesta->id }}">
                            <button type="submit"
                                class="bg-red-500 text-white px-5 py-2 rounded-lg hover:bg-red-600 shadow-sm transition ease-in-out duration-150">Eliminar</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-white rounded shadow p-4 mt-4">
        <form id="crear-respuesta-form">
            <!-- token -->
            @csrf
            <input type="hidden" name="hilos_id" value="{{ $hilo->id }}">
            <textarea name="contenido" id="contenido" rows="3"
                class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:border-orange-300"
                placeholder="Escribe tu respuesta aquí..." required></textarea>
            <button type="submit" class="bg-orange-600 text-white px-4 py-2 mt-2 rounded hover:bg-orange-700">Añadir
                respuesta</button>
        </form>
    </section>

    @vite('resources/js/respuestas.js')
</x-layout>
