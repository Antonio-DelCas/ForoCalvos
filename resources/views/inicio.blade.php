<x-layout>

    <section class="bg-blue-600 text-white rounded shadow p-8 mb-8 text-center">
        <h1 class="text-4xl font-bold mb-4">Bienvenido a ForoCalvos</h1>
        <p class="text-lg mb-6">
            Un lugar donde los calvos de todo el mundo pueden reunirse, compartir experiencias, reírse, y encontrar
            apoyo en la calvicie.
        </p>
        <a href="/crear-hilo"
            class="bg-white text-blue-600 px-6 py-3 rounded font-bold hover:bg-blue-700 hover:text-white transition">
            Crear un hilo de discusión
        </a>
    </section>

    <section class="bg-white rounded shadow p-6 text-center mb-4">
        <h2 class="text-3xl font-bold text-blue-600 mb-4">Explora nuestras Categorías</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="/hilos/1" class="bg-blue-100 border border-blue-300 rounded p-6 hover:shadow">
                <h3 class="text-2xl font-semibold text-blue-700 mb-2">
                    <p>Humor de Calvos</p>
                </h3>
                <p class="text-gray-700">Ríete con las mejores bromas y memes sobre la calvicie.</p>
            </a>
            <a href="/hilos/4" class="bg-yellow-100 border border-yellow-300 rounded p-6 hover:shadow">
                <h3 class="text-2xl font-semibold text-yellow-700 mb-2">
                    <p>Historias Divertidas</p>
                </h3>
                <p class="text-gray-700">Comparte y disfruta de historias graciosas sobre la calvicie.</p>
            </a>
            <a href="/hilos/6" class="bg-green-100 border border-green-300 rounded p-6 hover:shadow">
                <h3 class="text-2xl font-semibold text-green-700 mb-2">
                    <p>Consejos y Apoyo</p>
                </h3>
                <p class="text-gray-700">Encuentra y comparte consejos útiles para llevar la calvicie con estilo.</p>
            </a>
        </div>
    </section>
</x-layout>
