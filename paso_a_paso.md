creamos un proyecto laravel

- ` composer create-project --prefer-dist laravel/laravel api_laravel ` 
- vamos al archivo .env y configuramos la db local

- para crear una tabla usaremos el comando:
    `php artisan make:migration create_nombre_de_tu_tabla_table`
- Luego de difinir la tabla hacemos `php artisan migrate`

- Luego creamos el modelo con `php artisan make:model EquipoPrimera`

- Creamos el controller `php artisan make:controller EquipoPrimeraController`