<x-layout>
    <x-slot:title>
        Login
    </x-slot>

    <div class="flex justify-center">
        <div class="bg-white p-4 w-full max-w-md rounded shadow">
            <h1 class="text-2xl text-center text-blue-600 mb-4">Iniciar Sesión</h1>
            <form method="POST" action="/login">
                <div class="mb-4">
                    <label for="email" class="block">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" class="w-full border p-2 rounded">
                </div>
                <div class="mb-4">
                    <label for="password" class="block">Contraseña:</label>
                    <input type="password" id="password" name="password" class="w-full border p-2 rounded">
                </div>
                <button type="submit" class="bg-blue-500 text-white w-full p-2 rounded">Iniciar Sesión</button>
            </form>
            <div class="mt-4 text-center">
                <p>¿No tienes una cuenta? <a href="/register" class="text-blue-500">Regístrate aquí</a></p>
            </div>
        </div>
    </div>
</x-layout>
