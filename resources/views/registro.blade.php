<x-layout>
    <x-slot:title>
        Registro
    </x-slot>

    <div class="flex justify-center">
        <div class="bg-white p-4 w-full max-w-md rounded shadow">
            <h1 class="text-2xl text-center text-blue-600 mb-4">Registro usuario</h1>
            @if (session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error al Logear</strong>
                    <p>
                        {{ session()->get('error') }}
                    </p>
                </div>
            @endif
            <form method="POST" action="{{ route('registro-action') }}">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block">Nombre</label>
                    <input type="text" id="nombre" name="name" class="w-full border p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" class="w-full border p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block">Contraseña:</label>
                    <input type="password" id="password" name="password" class="w-full border p-2 rounded" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white w-full p-2 rounded">Registro</button>
            </form>
            <div class="mt-4 text-center">
                <p>¿Ya tienes una cuenta? <a href="/login" class="text-blue-500">Logeate aquí</a></p>
            </div>
        </div>
    </div>
</x-layout>
