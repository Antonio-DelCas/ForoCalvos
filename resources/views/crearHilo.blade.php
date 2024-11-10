<x-layout>
    <section class="bg-white rounded shadow p-8 mb-8">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-4">Crea un hilo para unirte al calvario</h1>
        <p class="text-center text-gray-600 mb-6">Sé un buen calvo y comparte tus pensamientos, preguntas o chistes y empieza la conversación.</p>
        
        <form action="<!-- aquí debería ir la ruta para almacenar el nuevo hilo?? -->" method="POST" class="space-y-6">
            <!-- Seleccionar Categoría -->
            <div>
                <label for="categoria" class="block text-lg font-semibold text-gray-700">Selecciona la categoría</label>
                <p class="text-sm text-gray-500 mb-2">¡No seas un calvo perdido, categoriza tu genialidad!</p>
                <select name="categoria" id="categoria" class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring focus:border-blue-300" required>
                    <option value="">Selecciona una categoría...</option>
                    <option value="humor">General</option>
                    <option value="historias">Videojuegos</option>
                    <option value="consejos">Deportes</option>
                    <option value="consejos">Viajes</option>
                    <option value="consejos">Moda Calva</option>
                    <option value="consejos">Cuidados Personales</option>
                    <option value="consejos">Cine y Tv</option>
                    <option value="consejos">Tecnologia Calva</option>
                    <option value="consejos">Leyendas Calvas</option>
                    <option value="consejos">Memes Calvos</option>
                </select>
            </div>

            <!-- Título del Hilo -->
            <div>
                <label for="titulo" class="block text-lg font-semibold text-gray-700">Título del hilo (pregunta)</label>
                <p class="text-sm text-gray-500 mb-2">¡Haz que los calvos se rasquen la cabeza (si tienen algo de pelo) con tu pregunta!</p>
                <input type="text" name="titulo" id="titulo" class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="¿Qué quieres preguntar o compartir?" required>
            </div>

            <!-- Primera Respuesta -->
            <div>
                <label for="contenido" class="block text-lg font-semibold text-gray-700">Tu primer aporte al hilo</label>
                <p class="text-sm text-gray-500 mb-2">Comienza la conversación, ¡deja que los demás calvos te sigan el rollo!</p>
                <textarea name="contenido" id="contenido" rows="5" class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring focus:border-blue-300" placeholder="Escribe aquí tu primer aporte..." required></textarea>
            </div>

            <!-- Botón para Crear el Hilo -->
            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded font-bold hover:bg-blue-700 transition">Crear Hilo</button>
            </div>
        </form>
    </section>
</x-layout>
