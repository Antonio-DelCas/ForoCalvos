<x-layout>
    <section class="bg-white rounded shadow p-6 mb-6">
        <h2 class="text-2xl font-bold mb-4 text-center text-orange-600">Contacto</h2>
        <p class="text-center mb-6 text-gray-700">Si tienes alguna pregunta, sugerencia o simplemente quieres saludar, no
            dudes en ponerte en contacto con nosotros. No prometemos respuestas rápidas, pero sí respuestas simpáticas.
            Puedes enviarnos un correo electrónico o usar el formulario a continuación.</p>
        <form action="mailto:antoniodelgadocastillo@gmail.com" method="post" enctype="text/plain" class="max-w-md mx-auto">
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700">Asunto:</label>
                <input type="text" name="subject" id="name" class="w-full border border-gray-300 p-3 rounded outline-none focus:ring-2 focus:ring-orange-500">
            </div>
            <div class="mb-4">
                <label for="email"class="block text-sm font-semibold text-gray-700">Correo Electrónico:</label>
                <input name="email" type="email" id="email" class="w-full border border-gray-300 p-3 rounded outline-none focus:ring-2 focus:ring-orange-500">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-semibold text-gray-700">Mensaje:</label>
                <textarea name="body" id="message" class="w-full border border-gray-300 p-2 rounded outline-none focus:ring-2 focus:ring-orange-500"></textarea>
            </div>
            <button type="submit"
                class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700 transition duration-200 ease-in-out">Enviar</button>
        </form>
    </section>
</x-layout>
