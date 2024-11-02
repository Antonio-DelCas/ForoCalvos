<x-layout>
    <section class="bg-white rounded shadow p-4 mb-4">
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-600">Categorías del Foro</h2>
        <div class="grid grid-cols-1 gap-4">
            {{ count($categorias) }}
           
        </div>
    </section>
</x-layout>
