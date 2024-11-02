<x-layout>
    <section class="bg-white rounded shadow p-4 mb-4">
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-600">Categorías del Foro</h2>
        <div class="grid grid-cols-1 gap-4">
            {{-- {{ $categorias }}
            <hr />
            {{ $categorias[0] }} --}}

            @foreach ($categorias as $categoria_valor)
                <div class="bg-blue-50 border border-blue-200 rounded p-4 hover:shadow">
                    <h3 class="text-lg font-semibold text-blue-600 mb-2"><a
                            href="/hilos/{{$categoria_valor->id}}">{{ $categoria_valor->titulo }}</a></h3>
                    <p class="text-gray-700">{{ $categoria_valor->descripcion }}</p>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
