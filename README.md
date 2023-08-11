Para este proyecto se ha usado Laravel 10 por ser la versión más nueva hasta el momento.
Se utilizó MySQL por su facil integración con el framework y los comandos de migración.
Para la interfaz gráfica se utilizó el motor por defecto blade con Bootstrap debido a mi familiaridad con este último.

A continuación detallo los comandos necesarios para ejecutar la aplicación una vez inicializado el proyecto:


<strong>Crear el archivo de creación de la tabla</strong>

php artisan make:migration create_producto_table

<strong>Realizar la migracion</strong>

php artisan migrate

<strong>Generar modelo</strong>

php artisan make:controller ProductoController --resource --model=Producto

<strong>Servir proyecto</strong>

php artisan serve


