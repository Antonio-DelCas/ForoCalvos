<x-layout>
    <section class="bg-white rounded shadow p-8 mb-8">
        <h1 class="text-3xl font-bold text-center text-orange-600 mb-4">Crea un hilo para unirte al calvario</h1>
        <p class="text-center text-gray-600 mb-6">Sé un buen calvo y comparte tus pensamientos, preguntas o chistes y
            empieza la conversación.</p>

        <form action="{{ route('crear-hilo-action') }}" method="POST" class="space-y-6">
            @csrf
            <!-- seleccionar Categoria -->
            <div>
                <label for="categoria" class="block text-lg font-semibold text-orange-700">Selecciona la categoría</label>
                <p class="text-sm text-gray-500 mb-2">¡No seas un calvo perdido, categoriza tu genialidad!</p>

                <select name="categoria" id="categoria"
                    class="w-full border border-orange-300 rounded p-3 focus:outline-none focus:ring focus:ring-orange-500 focus:border-orange-500 "
                    required>
                    <option value="">Selecciona una categoría...</option>
                    @foreach ($categorias as $categoria_valor)
                        <option value="{{ $categoria_valor->id }}">
                            {{ $categoria_valor->titulo }}
                        </option>
                    @endforeach

                </select>
            </div>

            <!-- titulo del hilo -->
            <div>
                <label for="titulo" class="block text-lg font-semibold text-orange-700">Título del hilo
                    (pregunta)</label>
                <p class="text-sm text-gray-500 mb-2">¡Haz que los calvos se rasquen la cabeza (si tienen algo de pelo)
                    con tu pregunta!</p>
                <input type="text" name="titulo" id="titulo"
                    class="w-full border border-orange-300 rounded p-3 focus:outline-none focus:ring focus:ring-orange-500"
                    placeholder="Pon algo tan interesante que los demás quieran rascarse la calva" required>
            </div>

            <!-- primera respuesta -->
            <div>
                <label for="contenido" class="block text-lg font-semibold text-orange-700">Tu primer aporte al
                    hilo</label>
                <p class="text-sm text-gray-500 mb-2">Comienza la conversación, ¡deja que los demás calvos te sigan el
                    rollo!</p>
                <textarea name="contenido" id="contenido" rows="4"
                    class="w-full border border-orange-300 rounded p-3 focus:outline-none focus:ring focus:ring-orange-500"
                    placeholder="Comparte aquí tus sabias palabras..." required></textarea>
            </div>

            <!-- boton para Crear el hilo -->
            <div class="text-center">
                <button type="submit"
                    class="bg-orange-600 text-white px-6 py-3 rounded font-bold hover:bg-orange-700 transition">Crear
                    Hilo</button>
            </div>
        </form>
    </section>
</x-layout>
