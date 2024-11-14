<x-layout>

    <section class="bg-blue-50 text-blue-900 text-white rounded-lg shadow-lg p-10 mb-10 text-center">
        <h1 class="text-4xl font-bold mb-4">Bienvenido a ForoCalvos</h1>
        <p class="text-lg mb-6 max-w-2x1 mx-auto">
            Un lugar donde los calvos de todo el mundo pueden reunirse, compartir experiencias, reírse, y encontrar
            apoyo en la calvicie.
        </p>
        <a href="/crear-hilo"
            class=" bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 shadow-lg hover:shadow-xl transition duration-200 ease-out">
            Crear un hilo de discusión
        </a>
    </section>

    <section class="bg-white rounded shadow p-6 text-center mb-4">
        <h2 class="text-3xl font-bold text-blue-900 mb-4">Explora nuestras Categorías</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <a href="/hilos/1"
                class="bg-blue-50 border border-blue-200 rounded-lg p-6 hover:shadow transition duration-200 ease-in-out">
                <h3 class="text-2xl font-semibold text-blue-800 mb-2">
                    <p>Humor de Calvos</p>
                </h3>
                <p class="text-gray-600">Ríete con las mejores bromas y memes sobre la calvicie.</p>
            </a>
            <a href="/hilos/4"
                class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 hover:shadow transition duration-200 ease-in-out">
                <h3 class="text-2xl font-semibold text-yellow-600 mb-2">
                    <p>Historias Divertidas</p>
                </h3>
                <p class="text-gray-600">Comparte y disfruta de historias graciosas sobre la calvicie.</p>
            </a>
            <a href="/hilos/6"
                class="bg-green-50 border border-green-200 rounded-lg p-6 hover:shadow transition duration-200 ease-in-out">
                <h3 class="text-2xl font-semibold text-green-700 mb-2">
                    <p>Consejos y Apoyo</p>
                </h3>
                <p class="text-gray-600">Encuentra y comparte consejos útiles para llevar la calvicie con estilo.</p>
            </a>
        </div>
    </section>
</x-layout>
