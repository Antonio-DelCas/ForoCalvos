<x-layout>
    <section class="bg-white rounded shadow p-4 mb-4">
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-600">Contacto</h2>
        <p class="text-center mb-4 text-gray-700">Si tienes alguna pregunta, sugerencia o simplemente quieres
            saludar, no dudes en ponerte en contacto con nosotros. Puedes enviarnos un correo electrónico o usar el
            formulario a continuación.</p>
        <form  action="mailto:antoniodelgadocastillo@gmail.com" method="get" enctype="text/plain" class="max-w-md mx-auto">
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700">Asunto:</label>
                <input type="text" name="subject" id="name" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="email"class="block text-sm font-semibold text-gray-700">Correo Electrónico:</label>
                <input  name="email" type="email" id="email" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-semibold text-gray-700">Mensaje:</label>
                <textarea name="body" id="message" class="w-full border border-gray-300 p-2 rounded"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enviar</button>
        </form>
    </section>
</x-layout>
