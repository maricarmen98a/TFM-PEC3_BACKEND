AER IOLAR
El software necesario para la instalación y uso de la aplicación es el siguiente:
NPM
Angular
PHP
Composer
XAMPP

Para la parte backend, se descargará o clonará el repositorio: 
https://github.com/maricarmen98a/TFM-Backend.git

1.	Primero, se introducirá el comando composer install en la carpeta backend.
2.	Se abrirá XAMPP y se presionará Start en Apache y MySQL.
3.	Se creará una base de datos en phpMyAdmin con nombre backend, o si se desea, cambiar el nombre de la base de datos en el fichero .env y crearla acorde a esto. El usuario de la base de datos es root, sin contraseña.
4.	Se inserta el comando php artisan migrate para crear las tablas, desde la carpeta backend.
5.	Se iniciará la parte del backend con el comando php artisan serve en la carpeta backend.
