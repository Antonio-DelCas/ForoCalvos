<x-layout>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
            <div class="w-24 h-24 rounded-full overflow-hidden ring-2 ring-gray-300">
                <img class="w-full h-full object-cover"
                    src="{{ $usuario->imagen ? asset('/storage/' . $usuario->imagen) : asset('default-usuario.jpg') }}"
                    alt="Perfil del usuario">
            </div>
            <div class="ml-6">
                <h2 class="text-2xl font-bold text-orange-600">{{ $usuario->name }}</h2>
                <p class="text-gray-500">Correo electrónico: {{ $usuario->email }}</p>
            </div>
        </div>
        <div class="mt-4">
            <label for="biografia" class="block text-lg font-semibold text-orange-700">Biografía</label>
            <p class="text-lg text-gray-500 mb-2">{{ $usuario->biografia }}</p>
        </div>
    </div>
</x-layout>
