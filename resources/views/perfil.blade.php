<x-layout>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
            <div class="w-24 h-24 rounded-full overflow-hidden ring-2 ring-gray-300">
                <img class="w-full h-full object-cover"
                    src="{{ auth()->user()->imagen ? asset('/storage/' . auth()->user()->imagen) : asset('default-usuario.jpg') }}"
                    alt="Perfil del usuario">
            </div>
            <div class="ml-6">
                <h2 class="text-2xl font-bold text-orange-600">{{ auth()->user()->name }}</h2>
                <p class="text-gray-500">Correo electrónico: {{ auth()->user()->email }}</p>
            </div>
        </div>
        <div class="mt-4">
            <h3 class="text-xl font-semibold text-gray-700">Cambiar imagen:</h3>
            <form action="{{ route('subir-imagen-action') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center gap-3">
                    <input id="file" type="file" name="file" class="">
                    <button type="submit"
                        class="bg-orange-500 text-white px-2 py-1 rounded-lg  hover:bg-orange-600">Guardar
                        imagen</button>
            </form>
        </div>
        <div class="mt-4">
            <div class="flex gap-4">
                <label for="biografia" class="block text-lg font-semibold text-orange-700">Biografía</label>
                <button id="button-editar"
                    class="bg-orange-500 text-white text-sm px-2 py-1 rounded-lg  hover:bg-orange-600">Editar</button>
            </div>
            <p class="text-lg text-gray-500 mb-2">{{ auth()->user()->biografia }}</p>
            <form action="{{ route('editar-biografia-action') }}" method="POST" style="display:none" id="form-bio">
                @csrf
                <textarea name="biografia" id="biografia" rows="2"
                    class="w-full border border-orange-300 rounded p-3 focus:outline-none focus:ring focus:ring-orange-500"
                    placeholder="Explica como de calvo eres" required>{{ auth()->user()->biografia }}</textarea>
                <button type="submit"
                    class="bg-orange-500 text-white px-2 py-1 rounded-lg  hover:bg-orange-600">Guardar
                    Biografía</button>
            </form>
        </div>
    </div>
    </div>
    @vite('resources/js/perfil.js')
</x-layout>
