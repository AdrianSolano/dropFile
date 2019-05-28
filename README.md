# DropFile
Una aplicacion que te permite subir archivo si estas registrado. Hecha con Laravel

# Stock configuracion.
En este proyecto se utiliza Laravel Valet

# Instalación
Una vez instalado todo el stack necesario se clona el repositorio:
```
git clone https://github.com/AdrianSolano/dropFile.git
```
Despues se entra al directorio y se instala en composer:
```
composer install
```
Crear en el servidor MySql con una base de datos llamada 'dropFile'

Cambiar el archivo .env.example a .env:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dropFile
DB_USERNAME=usuario_mysql
DB_PASSWORD=password_mysql
```
Generar la clave de cifrado:
```
php artisan key:generate
```
Lanzar las migraciones con el seeder (--seed)
```
php artisan migrate --seed
```
La aplicación ya debe funcionar y ser operativa desde la url http://dropfile.test/
