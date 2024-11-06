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

        //Categoria 1

        DB::table('hilos')->insert([
            'titulo' => '¿Quién ganaría en una pelea: un calvo vs. alguien con melena?',
            'categoria_id' => 1,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Te reconocen menos los conocidos después de afeitarte la cabeza?',
            'categoria_id' => 1,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Alguna vez te han confundido con otro calvo famoso?',
            'categoria_id' => 1,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Por qué los calvos siempre parecen más serios?',
            'categoria_id' => 1,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Categoria 2

        DB::table('hilos')->insert([
            'titulo' => 'Top 5 personajes calvos en videojuegos: ¿Quién es el más poderoso?',
            'categoria_id' => 2,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Alguna ventaja en videojuegos multijugador para los avatares calvos?',
            'categoria_id' => 2,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Un videojuego exclusivo para calvos? ¡Aquí algunas ideas!',
            'categoria_id' => 2,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Qué consola es mejor para los calvos: PlayStation, Xbox o Nintendo?',
            'categoria_id' => 2,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Categoria 3

        DB::table('hilos')->insert([
            'titulo' => '¿El deporte ideal para calvos? ¡Natación!',
            'categoria_id' => 3,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Yoga para calvos: posturas para evitar el sudor en la cabeza',
            'categoria_id' => 3,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Qué tan peligroso es el fútbol para un calvo? Riesgo de quemaduras solares en la cancha',
            'categoria_id' => 3,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Boxeo sin despeinarse: ¿Deberían los calvos tener ventaja en las peleas?',
            'categoria_id' => 3,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Categoria 4

        DB::table('hilos')->insert([
            'titulo' => 'Destinos calva-friendly: playas con mucha sombra',
            'categoria_id' => 4,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Visitar el Ártico en verano: ¡ideal para nuestras calvas!',
            'categoria_id' => 4,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Los mejores sombreros de viaje: estilos que combinan con cada destino',
            'categoria_id' => 4,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Destinos para broncearse la cabeza sin quemarse?',
            'categoria_id' => 4,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Categoria 5

        DB::table('hilos')->insert([
            'titulo' => '¿Sombrero o gorra? ¡La batalla definitiva!',
            'categoria_id' => 5,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Los mejores sombreros para reflejar el estilo y no el sol',
            'categoria_id' => 5,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Gorras frescas para el verano: ¿cómo mantener la cabeza aireada?',
            'categoria_id' => 5,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Gafas de sol, barba y calvicie? El combo perfecto para este año',
            'categoria_id' => 5,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Categoria 6

        DB::table('hilos')->insert([
            'titulo' => 'Aceites y lociones para mantener el brillo perfecto',
            'categoria_id' => 6,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Es necesaria la crema solar en la cabeza? Respuestas aquí',
            'categoria_id' => 6,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Masaje en el cuero cabelludo: ¿mito o realidad?',
            'categoria_id' => 6,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Productos mate vs. brillantes? ¡El debate continúa!',
            'categoria_id' => 6,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Categoria7 

        DB::table('hilos')->insert([
            'titulo' => 'Calvos famosos en el cine: ¿quién lo lleva mejor?',
            'categoria_id' => 7,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Series donde los villanos siempre son calvos',
            'categoria_id' => 7,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Películas donde el calvo salva el día (o al menos lo intenta)',
            'categoria_id' => 7,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Calvos en la comedia, Los mejores momentos de risa garantizada',
            'categoria_id' => 7,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Categoria 8


        DB::table('hilos')->insert([
            'titulo' => 'Los Auriculares de diadema: ¿son más cómodospara los calvos?',
            'categoria_id' => 8,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Apps para proteger el cuero cabelludo: ¿existen?',
            'categoria_id' => 8,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Robots de limpieza capilar: ¿lo próximo en tecnología calva?',
            'categoria_id' => 8,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Luz LED para la cabeza: ¡la nueva moda techie para calvos!',
            'categoria_id' => 8,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Categoria 9


        DB::table('hilos')->insert([
            'titulo' => 'Mahatma Gandhi: el calvo que cambió el mundo',
            'categoria_id' => 9,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Steve Jobs: cómo el look calvo revolucionó la tecnología',
            'categoria_id' => 9,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Calvos en la historia de la música: Phil Collins y otros iconos',
            'categoria_id' => 9,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => '¿Quién es el calvo más influyente de todos los tiempos?',
            'categoria_id' => 9,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Categoria 10


        DB::table('hilos')->insert([
            'titulo' => 'Compartan sus memes favoritos de Jason Statham calvo',
            'categoria_id' => 10,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Los mejores memes sobre el reflejo del sol en la calva',
            'categoria_id' => 10,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Calvos vs. con pelo: los memes más épicos de esta rivalidad',
            'categoria_id' => 10,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hilos')->insert([
            'titulo' => 'Memes sobre calvos en películas y series',
            'categoria_id' => 10,
            'users_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Respuestas Hilo 1
        // DB::table('respuestas')->insert([
        //     'hilo_id' => 1,
        //     'user_id' => 1,  
        //     'contenido' => 'Obviamente el calvo ganaría. Menos distracción, más concentración. Además, sin el cabello, su aerodinámica es mucho mejor. ¡Puede esquivar cualquier golpe!',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
