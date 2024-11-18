<x-layout>
    <x-slot:title>
        Login
    </x-slot>

    <div class="flex justify-center ">
        <div class="bg-white p-6 w-full max-w-md rounded-x1 shadow-lg border border-gray-300">
            <h1 class="text-3xl text-center font-bold text-gray-800 mb-6">Bienvenido a ForoCalvos</h1>

            @if (session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error al Logear</strong>
                    <p>
                        {{ session()->get('error') }}
                    </p>
                </div>
            @endif
            <form method="POST" action="{{ route('login-action') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block" font-medium text-gray-700>Correo Electrónico:</label>
                    <input type="email" id="email" name="email"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-orange-500"
                        placeholder="ejemplo@calvos.com" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block font-medium text-gray-700">Contraseña:</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-orange-500"
                        placeholder="Tu contraseña secreta" required>
                </div>
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white w-full p-2 rounded">Iniciar
                    Sesión</button>
            </form>
            <div class="mt-6 text-center">
                <p class="text-gray-600">¿Aún no eres miembro del club calvo?</p>
                <a href="/registro" class="text-orange-500 font-semibold hover:underline">Regístrate aquí</a></p>
            </div>
        </div>
    </div>
</x-layout>
