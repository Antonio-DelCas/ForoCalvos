<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Creando categorias
        DB::table('categorias')->insert([
            'titulo' => 'General',
            'descripcion' => 'Temas no relacionados con la calvicie.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Videojuegos',
            'descripcion' => 'Videojuegos para calvos.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Deportes',
            'descripcion' => 'Deportes para no despeinarse.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Viajes',
            'descripcion' => 'Descubre los mejores destinos para evitar el sol directo en la cabeza. ¡Sombreros bienvenidos!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Moda Calva',
            'descripcion' => '¿Qué sombrero o gorra se lleva esta temporada? La moda que te hará brillar, pero no por el cuero cabelludo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Cuidados Personales',
            'descripcion' => 'Consejos para mantener ese brillo perfecto en la cabeza. Porque incluso la calvicie requiere mantenimiento.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Cine y TV',
            'descripcion' => 'Películas y series donde los calvos tienen todo el protagonismo (o al menos, el reflejo de la luz lo asegura).',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Tecnología Calva',
            'descripcion' => 'Gadgets y tecnología para calvos: cascos ergonómicos, apps para mantener el cuero cabelludo fresco y más.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Leyendas Calvas',
            'descripcion' => 'Historias épicas de calvos que cambiaron el mundo. O al menos, lo intentaron sin despeinarse.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Memes Calvos',
            'descripcion' => 'El lugar para compartir los mejores memes calvos. ¡Risas garantizadas, sin necesidad de peinarse!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Creando Hilos

        DB::table('hilos')->insert([
            'titulo' => '¿Que cuchilla utilizais para afeitaros?',
            'categoria_id' => 1,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Lluvias en Valencia',
            'categoria_id' => 1,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Por que no llueve en Barcelona?',
            'categoria_id' => 2,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
