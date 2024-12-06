<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
            'name' => 'adelgado',
            'email' => 'adelgado@calvos.com',
            'password' => Hash::make('123456'),
            'is_admin' => 1,
            'imagen' => 'kratos.jpg',
            'biografia' => 'El más calvo'
        ]);

        User::factory()->create([
            'name' => 'DonBrillo',
            'email' => 'donbrillo@calvos.com',
            'password' => Hash::make('123456'),
            'is_admin' => 0,
            'imagen' => 'donlimpio.jpg',
            'biografia' => 'He pulido mi cabeza para ver el futuro, pero solo he encontrado mi reflejo.'
        ]);

        User::factory()->create([
            'name' => 'PeloPerdido',
            'email' => 'peloperdido@calvos.com',
            'password' => Hash::make('1234561'),
            'is_admin' => 0,
            'imagen' => 'saitama.jpg',
            'biografia' => 'Un día fui a cortarme el pelo... y nunca más lo vi.'
        ]);

        User::factory()->create([
            'name' => 'SombreroLoco',
            'email' => 'sombreroloco@calvos.com',
            'password' => Hash::make('123456'),
            'is_admin' => 0,
            'imagen' => 'breaking.jpg',
            'biografia' => 'Los sombreros no nos protegen, protegemos a los demas de nuestro brillo.'
        ]);

        User::factory()->create([
            'name' => 'ElCalvonauta',
            'email' => 'elcalvonauta@calvos.com',
            'password' => Hash::make('123456'),
            'is_admin' => 0,
            'imagen' => 'voldemort.jpg',
            'biografia' => 'Demostrando que no se necesita gravedad cuanto tienes una buena aerodinamica.'
        ]);

        User::factory()->create([
            'name' => 'AdiosMelena',
            'email' => 'adiosmelena@calvos.com',
            'password' => Hash::make('123456'),
            'is_admin' => 0,
            'imagen' => 'roshi.jpg',
            'biografia' => 'Me despedí de mi pelo con una gran fiesta.'
        ]);

        User::factory()->create([
            'name' => 'CabezaReluciente',
            'email' => 'cabezareluciente@calvos.com',
            'password' => Hash::make('123456'),
            'is_admin' => 0,
            'imagen' => 'maligno.jpg',
            'biografia' => 'Con mi calva planeo dominar el mundo... o por lo menos deslumbrarlo.'
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
            'descripcion' => 'Videojuegos para todos los calvos.',
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
            'descripcion' => 'Descubre los mejores destinos para evitar el sol directo en la cabeza. ¡Sombreros bienvenidos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Moda Calva',
            'descripcion' => '¿Tipo de gorra se lleva esta temporada? La moda que te hará brillar.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Cuidados Personales',
            'descripcion' => 'Consejos para mantener ese brillo perfecto en la cabeza.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Cine y TV',
            'descripcion' => 'Películas y series donde las calvas tienen todo el protagonismo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Tecnología Calva',
            'descripcion' => 'Gadgets y tecnología para calvos.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Leyendas Calvas',
            'descripcion' => 'Historias épicas de calvos que cambiaron el mundo sin despeinarse.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Creando Hilos

        // Categoria 1

        DB::table('hilos')->insert([
            'titulo' => '¿Quién ganaría en una pelea: un calvo vs. alguien con melena?',
            'categoria_id' => 1,
            'users_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Te reconocen menos después de afeitarte la cabeza?',
            'categoria_id' => 1,
            'users_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Alguna vez te han confundido con un calvo famoso?',
            'categoria_id' => 1,
            'users_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Por qué los calvos siempre parecen más serios?',
            'categoria_id' => 1,
            'users_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Categoria 2

        DB::table('hilos')->insert([
            'titulo' => 'Top 5 personajes calvos en videojuegos: ¿Quién es el más poderoso?',
            'categoria_id' => 2,
            'users_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Alguna ventaja en multijugador competitivo para los avatares calvos?',
            'categoria_id' => 2,
            'users_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Un videojuego exclusivo para calvos? ¡Aquí algunas ideas!',
            'categoria_id' => 2,
            'users_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Qué consola es mejor para nosotros como calvos: PlayStation, Xbox o Nintendo?',
            'categoria_id' => 2,
            'users_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Categoria 3

        DB::table('hilos')->insert([
            'titulo' => '¿El deporte ideal para calvos? ¡Natación!',
            'categoria_id' => 3,
            'users_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Yoga para calvos: posturas para evitar el sudor en la cabeza',
            'categoria_id' => 3,
            'users_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Qué tan peligroso es el fútbol para un calvo? Riesgo de quemaduras solares en la calva',
            'categoria_id' => 3,
            'users_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Boxeo sin despeinarse: ¿Deberían los calvos tener ventaja en las peleas?',
            'categoria_id' => 3,
            'users_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Categoria 4

        DB::table('hilos')->insert([
            'titulo' => 'Destinos calva-friendly: playas con mucha sombra',
            'categoria_id' => 4,
            'users_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Visitar el Ártico en verano: ¡ideal para nuestras cabezas!',
            'categoria_id' => 4,
            'users_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Los mejores sombreros de viaje: estilos que combinan con cada destino',
            'categoria_id' => 4,
            'users_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Destinos para broncearse la cabeza sin quemarse?',
            'categoria_id' => 4,
            'users_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Categoria 5

        DB::table('hilos')->insert([
            'titulo' => '¿Sombrero o gorra? ¡La batalla definitiva!',
            'categoria_id' => 5,
            'users_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Los mejores sombreros para reflejar estilo y no el sol',
            'categoria_id' => 5,
            'users_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Gorras frescas para el verano: ¿cómo mantener la cabeza aireada?',
            'categoria_id' => 5,
            'users_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Gafas de sol, barba y calvicie? El combo perfecto para este año',
            'categoria_id' => 5,
            'users_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Categoria 6

        DB::table('hilos')->insert([
            'titulo' => 'Aceites o lociones para mantener el brillo perfecto',
            'categoria_id' => 6,
            'users_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Es necesaria la crema solar en la cabeza? Respuestas aquí',
            'categoria_id' => 6,
            'users_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Masaje en el cuero cabelludo: ¿mito o realidad?',
            'categoria_id' => 6,
            'users_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Productos mate vs. brillantes? ¡El debate continúa!',
            'categoria_id' => 6,
            'users_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Categoria 7

        DB::table('hilos')->insert([
            'titulo' => 'Calvos famosos en el cine: ¿quién lo lleva mejor?',
            'categoria_id' => 7,
            'users_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Series donde los villanos siempre son calvos',
            'categoria_id' => 7,
            'users_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Películas donde el calvo salva el mundo (o al menos lo intenta)',
            'categoria_id' => 7,
            'users_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Calvos de la comedia: Los mejores momentos de risa garantizada',
            'categoria_id' => 7,
            'users_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Categoria 8

        DB::table('hilos')->insert([
            'titulo' => 'Los Auriculares de diadema: ¿son más cómodos para los calvos?',
            'categoria_id' => 8,
            'users_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Robots de limpieza capilar: ¿lo próximo en tecnología calva?',
            'categoria_id' => 8,
            'users_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Luz LED para la cabeza: ¡la nueva moda techie para calvos!',
            'categoria_id' => 8,
            'users_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Categoria 9

        DB::table('hilos')->insert([
            'titulo' => 'Mahatma Gandhi: el calvo que cambió el mundo',
            'categoria_id' => 9,
            'users_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Steve Jobs: cómo el look calvo revolucionó la tecnología',
            'categoria_id' => 9,
            'users_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => 'Calvos en la historia de la música: Phil Collins y otros iconos',
            'categoria_id' => 9,
            'users_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hilos')->insert([
            'titulo' => '¿Quién es el calvo más influyente de todos los tiempos?',
            'categoria_id' => 9,
            'users_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Creacion de respuestas

        // Hilo 1
        DB::table('respuestas')->insert([
            'hilos_id' => 1,
            'users_id' => 3,
            'contenido' => 'Obviamente el calvo ganaría. Menos distracción, más concentración. Además, sin el pelo, su aerodinámica es mucho mejor. ¡Puede esquivar cualquier golpe!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 1,
            'users_id' => 5,
            'contenido' => 'No estoy tan seguro… una buena melena podría funcionar como protección extra. Algo así como un casco natural, ¿no?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 1,
            'users_id' => 2,
            'contenido' => 'Pero hay que tener en cuenta el factor de intimidación. Un calvo entrando a pelear tiene una mirada más seria. ¡Con ese brillo en la cabeza y todo!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 2
        DB::table('respuestas')->insert([
            'hilos_id' => 2,
            'users_id' => 5,
            'contenido' => '¡Totalmente! Cambié mi look y mi madre casi no me reconocía en el aeropuerto. Dijo que parecía otro.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 2,
            'users_id' => 3,
            'contenido' => 'A mí me ha pasado varias veces en el gimnasio. Me dicen que me veo más duro ahora.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 2,
            'users_id' => 2,
            'contenido' => 'Yo aproveché para pasar desapercibido en una reunión familiar incómoda. ¡Funciona!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 3
        DB::table('respuestas')->insert([
            'hilos_id' => 3,
            'users_id' => 2,
            'contenido' => 'Sí, con Vin Diesel. Aunque… creo que no estoy tan fuerte. ¡Es la calva la que confunde!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 3,
            'users_id' => 4,
            'contenido' => 'A mí me han dicho que me parezco a The Rock, pero solo en la cabeza, claro.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 3,
            'users_id' => 5,
            'contenido' => 'Yo me he llevado varios ‘¡Mira, es Bruce Willis!’ en la calle. ¡Todo un honor!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 4
        DB::table('respuestas')->insert([
            'hilos_id' => 4,
            'users_id' => 4,
            'contenido' => 'Es el look. Cuando tienes una calva bien cuidada, todo el mundo piensa que sabes lo que haces.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 4,
            'users_id' => 3,
            'contenido' => 'Creo que al no tener pelo, todos ven la cabeza y piensan que estás concentrado.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 4,
            'users_id' => 2,
            'contenido' => '¡Porque gastamos menos tiempo en peinarnos y más en parecer profundos!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 5
        DB::table('respuestas')->insert([
            'hilos_id' => 5,
            'users_id' => 6,
            'contenido' => 'Kratos, sin duda. ¡Ese tipo no necesita ni pelo para hacer temblar a los dioses! Kratos tiene fuerza bruta y una calva perfecta.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 5,
            'users_id' => 3,
            'contenido' => 'Agent 47 es mi elección. Es calvo y sofisticado, un asesino con clase. Además, no deja rastros de ADN. ¡Definitivamente gana puntos extra!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 5,
            'users_id' => 5,
            'contenido' => 'Yo diría Saitama de One Punch Man, aunque no sea un videojuego en sí. ¡Su poder viene de su calvicie! Imagínense si tuviera pelo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 6
        DB::table('respuestas')->insert([
            'hilos_id' => 6,
            'users_id' => 2,
            'contenido' => 'Claro que sí, menos volumen. ¡Son más difíciles de ver en el campo de batalla!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 6,
            'users_id' => 5,
            'contenido' => 'A mí me gusta pensar que los avatares calvos son más resistentes. No sé, tiene sentido, ¿no?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 6,
            'users_id' => 3,
            'contenido' => 'Además, tienen un aspecto intimidante. No necesitas habilidades especiales cuando te ves tan serio.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 7
        DB::table('respuestas')->insert([
            'hilos_id' => 7,
            'users_id' => 4,
            'contenido' => 'Una aventura donde el héroe calvo debe buscar un brillo perfecto. ¡Misiones para pulir la calva!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 7,
            'users_id' => 3,
            'contenido' => '¿Qué tal un juego de sigilo donde el protagonista calvo usa su reflejo para distraer enemigos?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 7,
            'users_id' => 5,
            'contenido' => 'Un RPG donde cada calvicie tiene habilidades especiales. ¡Que cada brillo tenga un poder diferente!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 8
        DB::table('respuestas')->insert([
            'hilos_id' => 8,
            'users_id' => 3,
            'contenido' => 'PlayStation tiene Kratos, así que ya sabemos la respuesta… ¡Calvos ganadores!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 8,
            'users_id' => 6,
            'contenido' => 'Xbox tiene a muchos de los mejores shooters, y esos son perfectos para avatares calvos.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 8,
            'users_id' => 2,
            'contenido' => 'Nintendo tiene Mario y algunos calvos adorables, pero para ser sinceros… ¡La que tenga menos reflejos!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 9
        DB::table('respuestas')->insert([
            'hilos_id' => 9,
            'users_id' => 5,
            'contenido' => 'Totalmente de acuerdo. Sin pelo, nos deslizamos mejor en el agua, es pura aerodinámica. ¡Los calvos en la natación siempre llevan ventaja!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 9,
            'users_id' => 7,
            'contenido' => 'Yo añadiría el ciclismo, pero solo si llevas casco. ¡Nada peor que quemarse la cabeza en plena carrera!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 9,
            'users_id' => 3,
            'contenido' => 'El boxeo también podría ser ideal. Sin pelo para agarrar, el oponente pierde puntos de agarre. Y, claro, menos distracción durante el combate.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 10
        DB::table('respuestas')->insert([
            'hilos_id' => 10,
            'users_id' => 6,
            'contenido' => 'Postura del perro mirando hacia abajo, ideal para que el sudor baje y no se quede en la calva.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 10,
            'users_id' => 5,
            'contenido' => 'Yo recomiendo la postura del niño, así apoyas la cabeza y refrescas la calva.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 10,
            'users_id' => 1,
            'contenido' => 'Para los calvos, cualquier postura que incluya estar boca abajo funciona. ¡Nada de calor en la cabeza!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 11
        DB::table('respuestas')->insert([
            'hilos_id' => 11,
            'users_id' => 3,
            'contenido' => 'Bastante. ¡Un calvo al sol necesita protección extra! Gorra o crema solar son imprescindibles.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 11,
            'users_id' => 4,
            'contenido' => 'Yo suelo ponerme un pañuelo para evitar quemaduras, tambien funciona con el sudor.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 11,
            'users_id' => 2,
            'contenido' => 'Nada como una gorra debajo del sol en el descanso. ¡Se juega mejor sin preocupación de quemarse!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 12
        DB::table('respuestas')->insert([
            'hilos_id' => 12,
            'users_id' => 4,
            'contenido' => 'Claro, es más fácil moverse sin pelo. ¡La calva es un arma secreta!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 12,
            'users_id' => 3,
            'contenido' => 'Además, los calvos tienen un look más intimidante. ¡Psicológicamente, ya tienen ventaja!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 12,
            'users_id' => 2,
            'contenido' => 'Cada golpe cuenta cuando no tienes pelo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 13
        DB::table('respuestas')->insert([
            'hilos_id' => 13,
            'users_id' => 3,
            'contenido' => 'La Costa Brava tiene algunas playas con mucha sombra por los árboles cercanos.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 13,
            'users_id' => 5,
            'contenido' => 'Yo fui a un resort en Bali donde había sombrillas gigantes en cada camastro. ¡Ni un rayo de sol tocó mi cabeza!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 13,
            'users_id' => 2,
            'contenido' => '¿Y qué tal la playa en Islandia? No es que tenga sombra, ¡pero al menos no te quemas la calva con el sol!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 14
        DB::table('respuestas')->insert([
            'hilos_id' => 14,
            'users_id' => 5,
            'contenido' => 'Sin sol directo, sin calor, ¡perfecto para nosotros los calvos! Además, nada como el frío en la calva.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 14,
            'users_id' => 4,
            'contenido' => 'Yo lo probé el año pasado y fue genial. Sin quemaduras, eso si, un gorrito o te congelas.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 14,
            'users_id' => 3,
            'contenido' => 'Si no te importa el frío, es perfecto. ¡La experiencia de calvo en el Ártico es única!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 15
        DB::table('respuestas')->insert([
            'hilos_id' => 15,
            'users_id' => 4,
            'contenido' => 'Sombrero de ala ancha para la playa, y gorra para la ciudad. ¡La clave está en variar!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 15,
            'users_id' => 5,
            'contenido' => 'Yo llevo uno estilo pescador para cada viaje. ¡Cubierta total y no me preocupo del sol!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 15,
            'users_id' => 3,
            'contenido' => 'Sombrero fedora para el estilo, y un clásico de paja para los días de mucho sol. ¡Calvo con estilo!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 16
        DB::table('respuestas')->insert([
            'hilos_id' => 16,
            'users_id' => 2,
            'contenido' => 'Las playas del Mediterráneo tienen sombra y sol justo para no quemarse.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 16,
            'users_id' => 3,
            'contenido' => 'Consejo: mejor broncearse temprano en la mañana o al atardecer. ¡La cabeza brilla sin quemaduras!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 16,
            'users_id' => 5,
            'contenido' => 'Un buen sombrero y sombra es todo lo que necesitas. Y si no, ¡mejor evitar el sol fuerte!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 17
        DB::table('respuestas')->insert([
            'hilos_id' => 17,
            'users_id' => 4,
            'contenido' => 'La gorra siempre es más cómoda, y además hay más variedad. Eso sí, los sombreros le dan un aire elegante, pero depende de la ocasión.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 17,
            'users_id' => 5,
            'contenido' => 'Para mí, los sombreros siempre dan un toque de distinción. Especialmente en verano, ¡nada como un buen sombrero de paja para proteger la calva!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 17,
            'users_id' => 2,
            'contenido' => 'Gorra en invierno y sombrero en verano. ¡La clave es rotar! Además, así tienes excusa para tener uno de cada estilo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 18
        DB::table('respuestas')->insert([
            'hilos_id' => 18,
            'users_id' => 3,
            'contenido' => 'Un buen sombrero Fedora siempre queda elegante, y no refleja tanto el sol como una gorra.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 18,
            'users_id' => 3,
            'contenido' => 'Yo uso sombreros de ala ancha en verano. ¡Cubren bien y le dan un toque sofisticado a la calva!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 18,
            'users_id' => 5,
            'contenido' => 'Los sombreros de paja son mis favoritos para el verano. ¡Son frescos y protegen sin hacer que brille la calva!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // Hilo 19
        DB::table('respuestas')->insert([
            'hilos_id' => 19,
            'users_id' => 5,
            'contenido' => 'Las gorras de tela perforada son las mejores. ¡Dejan que el aire pase y no hace tanto calor!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 19,
            'users_id' => 4,
            'contenido' => 'Yo recomiendo las gorras deportivas con material transpirable. ¡Evitas el sudor en la calva!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 19,
            'users_id' => 5,
            'contenido' => 'Hay unas gorras con malla en la parte trasera que funcionan perfecto para el verano. ¡Calva fresca garantizada!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 20


        DB::table('respuestas')->insert([
            'hilos_id' => 20,
            'users_id' => 6,
            'contenido' => 'Si le agregas un abrigo largo, automáticamente eres el jefe final en un videojuego.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 20,
            'users_id' => 7,
            'contenido' => 'Yo lo he probado y la gente asume que soy filósofo. Es un poder que no esperaba.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 20,
            'users_id' => 1,
            'contenido' => '¡Totalmente de acuerdo! Es como ser un superhéroe anónimo, pero con estilo y menos pelo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 21
        DB::table('respuestas')->insert([
            'hilos_id' => 21,
            'users_id' => 2,
            'contenido' => 'Yo uso aceite de coco, es barato y da un brillo muy natural. ¡Además huele bien!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 21,
            'users_id' => 2,
            'contenido' => 'Aloe vera, es perfecto para el día a día',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 21,
            'users_id' => 3,
            'contenido' => 'Cuidado con el aceite de oliva… brilla demasiado. Lo probé una vez y casi deslumbro a todos.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Hilo 22
        DB::table('respuestas')->insert([
            'hilos_id' => 22,
            'users_id' => 3,
            'contenido' => '¡Absolutamente! La calva es piel expuesta, y el sol pega fuerte. Una buena crema solar es clave.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 22,
            'users_id' => 3,
            'contenido' => 'Si eres calvo, necesitas protección solar, especialmente en verano. ¡Es fácil quemarse!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 22,
            'users_id' => 2,
            'contenido' => 'Una crema ligera es mejor. Evita las espesas, que dan brillo extra y parece que llevas laca.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // Hilo 23
        DB::table('respuestas')->insert([
            'hilos_id' => 23,
            'users_id' => 4,
            'contenido' => 'Funciona, en serio. Los masajes ayudan a mantener la piel relajada y evitan la resequedad.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 23,
            'users_id' => 5,
            'contenido' => 'Yo lo hago cada mañana. Además de ser relajante, se siente genial.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 23,
            'users_id' => 2,
            'contenido' => 'No es un mito. Aparte de relajante, ayuda a que el brillo sea más uniforme.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 24
        DB::table('respuestas')->insert([
            'hilos_id' => 24,
            'users_id' => 5,
            'contenido' => 'Mate es mejor para el día, especialmente si no quieres deslumbrar a todos. ¡Brillo para la noche!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 24,
            'users_id' => 2,
            'contenido' => 'Prefiero el look mate, es más natural y no parece que llevo productos en la cabeza.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 24,
            'users_id' => 3,
            'contenido' => 'El brillo tiene su encanto, pero en ocasiones especiales. Para diario, mate sin duda.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 25
        DB::table('respuestas')->insert([
            'hilos_id' => 25,
            'users_id' => 7,
            'contenido' => 'Vin Diesel es el calvo definitivo. ¡Ese tipo lleva la calvicie con una seguridad increíble!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 25,
            'users_id' => 5,
            'contenido' => 'Bruce Willis, sin duda. La calvicie le dio un aire duro que definió su carrera en el cine de acción.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 25,
            'users_id' => 3,
            'contenido' => 'Dwayne Johnson… ¡el tipo tiene una calvicie legendaria y un carisma enorme! Para mí, es el rey de los calvos en la pantalla.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 26
        DB::table('respuestas')->insert([
            'hilos_id' => 26,
            'users_id' => 7,
            'contenido' => 'Lex Luthor de Superman, un clásico. Es como si la calvicie lo hiciera ver más malvado.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 26,
            'users_id' => 2,
            'contenido' => 'Yo siempre he pensado que es injusto que hagan villanos calvos. ¡Al menos somos icónicos!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 26,
            'users_id' => 5,
            'contenido' => 'El villano de Breaking Bad, Hank Schrader. ¡Le dieron un toque único y es inolvidable!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 27
        DB::table('respuestas')->insert([
            'hilos_id' => 27,
            'users_id' => 3,
            'contenido' => 'Dwayne Johnson en Jumanji, ¡totalmente épico! La calvicie le da un toque heroico.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 27,
            'users_id' => 6,
            'contenido' => 'Bruce Willis en Die Hard. ¡La calvicie le da un toque de dureza que nadie más tiene!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 27,
            'users_id' => 5,
            'contenido' => 'Vin Diesel en Fast and Furious. ¡Toda la saga y nunca necesita peinarse!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 28
        DB::table('respuestas')->insert([
            'hilos_id' => 28,
            'users_id' => 4,
            'contenido' => 'Larry David en Curb Your Enthusiasm. ¡Es hilarante! Sus expresiones calvas son únicas.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 28,
            'users_id' => 5,
            'contenido' => 'Danny DeVito en Casi todo lo que hace, ¡es un calvo legendario en la comedia!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 28,
            'users_id' => 2,
            'contenido' => 'Jason Alexander como George en Seinfeld. ¡Su calvicie aporta a cada chiste!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 29
        DB::table('respuestas')->insert([
            'hilos_id' => 29,
            'users_id' => 5,
            'contenido' => 'Sí, hay apps que te recuerdan aplicar protector solar. ¡Perfectas para no olvidar!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 29,
            'users_id' => 7,
            'contenido' => 'Yo uso una para monitorear el clima y saber cuándo usar gorra. Muy útil.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('respuestas')->insert([
            'hilos_id' => 29,
            'users_id' => 2,
            'contenido' => 'No he visto una específica para calvos, pero sería genial una que te sugiera productos.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 30
        DB::table('respuestas')->insert([
            'hilos_id' => 30,
            'users_id' => 2,
            'contenido' => 'Si inventan uno que pula el cuero cabelludo, ¡lo compraría! Solo falta que haga masajes.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 30,
            'users_id' => 4,
            'contenido' => '¡Sería genial! Algo como un Roomba para la cabeza. Limpio y brillante todo el tiempo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 30,
            'users_id' => 3,
            'contenido' => 'Imagina una máquina que te aplique los productos automáticamente. ¡Sería un sueño!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 31
        DB::table('respuestas')->insert([
            'hilos_id' => 31,
            'users_id' => 3,
            'contenido' => '¡Perfecto para los que queremos destacar en la oscuridad! El look de fiesta calvo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 31,
            'users_id' => 5,
            'contenido' => 'Yo lo probaría para ciclismo nocturno. Además de seguridad, ¡se ve futurista!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 31,
            'users_id' => 2,
            'contenido' => 'Solo si tiene una función para ajustar el brillo. ¡No quiero parecer una linterna humana!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Hilo 32
        DB::table('respuestas')->insert([
            'hilos_id' => 32,
            'users_id' => 4,
            'contenido' => 'Gandhi demostró que no necesitas pelo para ser fuerte. Su calvicie era símbolo de humildad y dedicación.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 32,
            'users_id' => 2,
            'contenido' => 'Pienso que su calva lo hacía ver más sabio. ¡Es una imagen icónica!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 32,
            'users_id' => 5,
            'contenido' => 'Creo que la calvicie le daba un aire de simplicidad y fuerza interior. ¡Todo un símbolo!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Hilo 33
        DB::table('respuestas')->insert([
            'hilos_id' => 33,
            'users_id' => 5,
            'contenido' => 'Steve Jobs fue revolucionario, y su look calvo le daba un toque de seriedad y estilo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 33,
            'users_id' => 2,
            'contenido' => 'Para mí, la calvicie le ayudaba a dar ese look de genio. ¡Simple y directo!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 33,
            'users_id' => 1,
            'contenido' => '¡El look calvo era parte de su marca! Nada más auténtico que su estilo minimalista.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Hilo 34
        DB::table('respuestas')->insert([
            'hilos_id' => 34,
            'users_id' => 6,
            'contenido' => 'Phil Collins es un grande, su calvicie nunca fue un problema en su éxito.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 34,
            'users_id' => 4,
            'contenido' => '¿Y qué tal Michael Stipe? Los calvos en la música han dejado huella.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 34,
            'users_id' => 5,
            'contenido' => 'La calvicie es señal de talento musical. ¡Phil Collins, un verdadero ícono!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Hilo 35
        DB::table('respuestas')->insert([
            'hilos_id' => 35,
            'users_id' => 2,
            'contenido' => 'Yo diría Gandhi, por su impacto en la paz mundial y su estilo simple.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 35,
            'users_id' => 6,
            'contenido' => 'Para mí, Bruce Willis es el más influyente en el cine. ¡Calvo y duro!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('respuestas')->insert([
            'hilos_id' => 35,
            'users_id' => 5,
            'contenido' => 'Dwayne Johnson, sin duda. ¡El calvo más carismático de nuestros tiempos!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
