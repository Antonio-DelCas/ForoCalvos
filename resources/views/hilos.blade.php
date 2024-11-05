<x-layout>
    {{-- {{ $hilos }}
    <hr />
    {{ $categoria }} --}}
    <section class="bg-white rounded shadow p-4 mb-4">
        <h2 class="text-2xl font-bold mb-1 text-center text-blue-600">{{ $categoria->titulo }}</h2>
        <h3 class="text-xl font-bold mb-4 text-center text-blue-600">{{ $categoria->descripcion }}</h3>
        <div class="grid grid-cols-1 gap-4">
            @foreach ($hilos as $hilo_valor)
                <div class="bg-blue-50 border border-blue-200 rounded p-4 hover:shadow">
                    <h3 class="text-lg font-semibold text-blue-600 mb-2">
                        <a href="/respuestas/{{ $hilo_valor->id }}">{{ $hilo_valor->titulo }}</a>
                    </h3>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
