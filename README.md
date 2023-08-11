Para este proyecto se ha usado Laravel 10 por ser la versión más nueva hasta el momento.
Se utilizó MySQL por su facil integración con el framework y los comandos de migración.
Para la interfaz gráfica se utilizó el motor por defecto blade con Bootstrap debido a mi familiaridad con este último.

A continuación detallo los comandos necesarios para ejecutar la aplicación una vez inicializado el proyecto:


#Crear el archivo de creación de la tabla
php artisan make:migration create_producto_table

#realizar la migracion
php artisan migrate

#generar modelo
php artisan make:controller ProductoController --resource --model=Producto

#servir proyecto
php artisan serve


