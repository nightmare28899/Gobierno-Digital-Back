# Gobierno-Digital-Back
Kevin López González
para desplegar:
1. Clonar el repositorio
2. Generár la carpeta vendor con el comando `composer install`
3. Crear el archivo .env 
4. Generar la llave con el comando `php artisan key:generate`
5. Crear la base de datos en MySQL que se llama gobierno_digital
6. Correr las migraciones con el comando `php artisan migrate`
7. Correr los seeders con el comando `php artisan db:seed`, primero el seeder de los Users y después la de RolesTableSeeder y al final RolesUserTableSeeder
8. Correr el servidor con el comando `php artisan serve`

opiniones:
    El proyecto tiene muchas cosas que mejorar por ejemplo:
        - Falto implementar el middleware de roles para las rutas directas, ya está creado pero no implementado
        - Falto mejorar el código de los controladores
        - Mejorar la logica de como funciona cada ruta al hacer una petición
        - En conclusion siempre se puede mejorar