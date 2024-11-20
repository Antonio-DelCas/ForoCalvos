<x-layout>
    {{-- {{ $hilos }}
    <hr /> --}}
    {{-- {{ $categoria }} --}}
    <section class="bg-white rounded shadow p-4 mb-4">
        <h2 class="text-2xl font-bold mb-1 text-center text-orange-600">{{ $categoria->titulo }}</h2>
        <h3 class="text-xl font-bold mb-4 text-center text-orange-600">{{ $categoria->descripcion }}</h3>
        <div class="grid grid-cols-1 gap-4">
            @foreach ($hilos as $hilo_valor)
                <a href="/respuestas/{{ $hilo_valor->id }}"
                    class="block bg-orange-50 border border-orange-200 rounded p-4 hover:shadow">
                    <h3 class="text-lg font-semibold text-orange-600 mb-2">{{ $hilo_valor->titulo }}</h3>
                    <p class="text-sm text-gray-600">Creado por:
                        <span class="text-orange-500">{{ $hilo_valor->autor->name }}</span>
                        <span class="text-orange-500">{{ $hilo_valor->created_at->format('d/m/Y') }}</span>
                    </p>
                </a>
            @endforeach
        </div>
    </section>
</x-layout>
