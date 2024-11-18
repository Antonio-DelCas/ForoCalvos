<x-layout>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
            <div class="w-24 h-24 rounded-full overflow-hidden ring-2 ring-gray-300">
                <img class="w-full h-full object-cover"
                    src="{{ auth()->user()->imagen ? asset('/storage/' . auth()->user()->imagen) : asset('default-avatar.png') }}"
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
                    <label for="file"
                        class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg cursor-pointer hover:bg-gray-300">
                        Seleccionar imagen </label>
                    <input id="file" type="file" name="file" class="hidden">
                    <button type="submit"
                        class="bg-orange-500 text-white px-43 py-2 rounded-lg  hover:bg-orange-600">Guardar
                        imagen</button>
            </form>
        </div>
        <div class="mt-4">
            <h3 class="text-xl font-semibold text-gray-700">Descripción:</h3>
            <p class="text-gray-600 mt-2">
                {{ $descripcion ?? 'Esta es una descripción del usuario. Comparte más sobre ti.' }}
            </p>
        </div>
    </div>
</x-layout>
