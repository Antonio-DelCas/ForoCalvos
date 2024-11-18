{{-- {{ $respuestas }}
{{ $respuestas[0] }}
{{ $respuestas[0]->user->name }} --}}
<x-layout>
    <section class="bg-white rounded shadow p-4 mb-4">
        <h2 class="text-2xl font-bold mb-1 text-center text-orange-600">{{ $hilo->titulo }}</h2>
        <h3 class="text-xl font-bold mb-4 text-center text-orange-600">{{ $hilo->descripcion }}</h3>
        <div id="respuesta-contenedor" class="grid grid-cols-1 gap-4">
            @foreach ($respuestas as $respuesta)
                <div class="bg-gray-50 border border-gray-200 rounded p-4 hover:shadow">
                    <div class="flex items-center mb-2">
                        <img class="w-10 h-10 rounded-full ring-2 ring-gray-300"
                            src="{{ asset('/storage/' . $respuesta->user->imagen) }}" alt="Avatar del usuario">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-orange-600">{{ $respuesta->user->name }}</h3>
                            <p class="text-sm text-gray-500">Publicado el:
                                {{ $respuesta->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                    <p class="text-gray-700">{{ $respuesta->contenido }}</p>
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
