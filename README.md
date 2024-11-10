# Forocalvos

## Como empezar

-   Instalar [PHP](https://www.php.net/manual/es/install.php), [composer](https://getcomposer.org/) y [Node](https://nodejs.org/en/)
-   Clonar el repositorio: `git clone git@github.com:Antonio-DelCas/forocalvos.git`
-   Instalar dependencias, php `composer install --ignore-platform-reqs` y node `npm i`
-   Aplicar migraciones y sembrar la base de datos `php artisan migrate:refresh --seed`, con esto creamos las tablas en el SQL y introducimos los datos por defecto

## Ejecutar el servidor

Para iniciar el servidor ejecuta el siguiente comando, este comando ejecutará a la vez `php artisan serve` y `npm run dev`.

```bash
composer dev
```

## Comandos del servidor

### Crear tabla en la base de datos

Para crear una migracion ejecuta el siguiente comando, si el nombre de la migración empieza por un verbo [create,delete,update] laravel rellenara el archivo con el codigo correspondiente para empezar mas rapido.
Para hacer que las automatizaciones de laravel funcionen bien, el nombre de la tabla **debe estar siempre** en **plural**.

```bash
php artisan make:migration create_tables
```

### Crear un modelo

El modelo sirve como enlace a la tabla del mysql, através de esta clase crearemos, obtendremos, modificaremos y borraremos datos en la tabla.
El nombre del modelo **debe estar siempre** en **singular**.

```bash
php artisan make:model Table
```

### Interpolacion en php

para interpolar para un valor de forma dinamica en php ustilizamos la sintaxis
```php
{{$variable}}
```
Esto imprimirá el valor de la variable cuando se renderice por el servidor.
