<x-layout>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
            <img class="w-24 h-24 rounded-full ring-2 ring-gray-300"
                src="{{ asset('/storage/' . auth()->user()->imagen) }}" alt="Perfil del usuario">
            <div class="ml-6">
                <h2 class="text-2xl font-bold text-blue-600">{{ auth()->user()->name }}</h2>
                <p class="text-gray-500">Correo electrónico: {{ auth()->user()->email }}</p>
            </div>
        </div>
        <div class="mt-4">
            <h3 class="text-xl font-semibold text-gray-700">Cambiar imagen:</h3>
            <form action="{{ route('subir-imagen-action') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="file" name="file" />
                <button type="submit" class="bg-blue-500 text-white w-full p-2 rounded">Guardar imagen</button>

            </form>
        </div>
        <div class="mt-4">
            <h3 class="text-xl font-semibold text-gray-700">Descripción:</h3>
            <p class="text-gray-600 mt-2">
                {{ $descripcion ?? 'Esta es una descripción del usuario. Comparte más sobre ti.' }}</p>
        </div>
    </div>
</x-layout>
