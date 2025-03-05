[![Proyecto prueba: Coworking Twgroup](https://www.gestionarlogistica.com.ar/img/logo.webp "Proyecto prueba: Coworking Twgroup")](https://www.gestionarlogistica.com.ar/img/logo.webp "Proyecto prueba: Coworking Twgroup")


## Proyecto prueba técnica Coworking Twgroup

Este proyecto Laravel (v10.48.28) es para gestionar la reserva de
espacios en un coworking. La aplicación debe tener dos tipos de
usuarios: **administradores** y **clientes**. Los clientes pueden
registrarse, iniciar sesión, y hacer reservaciones en las salas de
coworking. Los administradores pueden gestionar las salas y supervisar
las reservaciones realizadas por los clientes.

Desde este proyecto se manejan las siguientes caracteristicas: 

- Como administrador:
* Autenticación de administrador
* Gestión de usuarios administradores/clientes
* Gestión de salas
* Gestión de reservaciones
- Como cliente:
* Autenticación de cliente
* Registro como cliente
* Reservar espacios en las salas
* Visualizar reservaciones realizadas
* Eliminar reservaciones realizadaz

### Construido con: 

[![Laravel][Laravel.com]][Laravel-url]
[![Bootstrap][Bootstrap.com]][Bootstrap-url]
[![Laravel-backpack][Laravel-backpack.com]][Laravel-backpack-url]


<!-- GETTING STARTED -->
## Comenzar a desarrollar

### Requisitos de instalación

Este es un listado del stack necesario para desarrollar sobre este proyecto

* PHP 8.1+
* Composer
* Mysql 8.1+
* Web server como apache o nginx

ó puedes utilizarlo mediante **Docker** lo cual te ayudará a agilizar el proceso de instalación, a continuación describiré los pasos sin docker y con docker.

### Instalación sin docker

_En este paso conocerás como inicializar el proyecto manualmente sin utilizar docker de una manera rapida y sencilla._

1. Clona este  repositorio
   ```sh
   git clone https://github.com/sabaz120/coworking-admin
   ```
2. Copiar el archivo .env.example en .env (Y ajustar tus credenciales de conexión mysql: host, user, password, database)
	  ```sh
   cp .env.example .env
   ```
3. Instalar los paquetes de composer 
	   ```sh
	   composer install
	   ```
4. Instalar los paquetes de npm
	   ```sh
	   npm install
	   ```
5. Compilar el proyecto
	```sh
	   npm run build
	```
6. Ejecutar migraciones con sus semillas
	```sh
	   php artisan migrate --seed
	```
7. Generar el APP KEY
	```sh
	   php artisan key:generate
	```
8. Una vez hecho esto, ya puedes iniciar el servicio
	```sh
	   php artisan serve y ingresar al sitio en http://localhost:8000
	```

### Instalación con docker

_En este paso conocerás como inicializar el proyecto utilizando docker y docker-compose los cuales te ayudarán a levantar el ambiente de una manera rapida y sencilla._

1. Clona este  repositorio
   ```sh
   git clone https://github.com/sabaz120/coworking-admin
   ```
2. Copiar el archivo .env.example en .env
	  ```sh
   cp .env.example .env
   ```
3. Levantar el docker con docker compose
   ```sh
   docker-compose up -d  
   ```
4. Validar que los servicios se esten ejecutando
   ```sh
   docker ps
   ```
	Deberás ver 3 servicios en docker corriendo nginx_coworking, sql_coworking, api_coworking.
	
5. Instalar los paquetes de composer 
	   ```sh
	   docker-compose exec api composer install
	   ```
6. Instalar los paquetes de npm
	   ```sh
	   docker-compose exec api npm install
	   ```
7. Compilar el proyecto
	```sh
	   docker-compose exec api npm run build
	```
8. Ejecutar migraciones con sus semillas
	```sh
	   docker-compose exec api php artisan migrate --seed
	```
9. Generar el APP KEY
	```sh
	   docker-compose exec api php artisan key:generate
	```
10. Una vez realizado todo esto, ya deberías poder usar el sitio
	```sh
	   http://localhost:8001
	```
### Una vez inicializado y configurado el proyecto, se debe ingresar al administrativo y crear las salas que estarán disponibles para reservación

* Ingresar a la sección administrativa: http://localhost:8000/admin ó http://localhost:8001/admin (si estas usando el docker)
* Si se ejecutaron las semillas sin problemas, pueden utilizar estas credenciales de admin: admin@twgroup.com y clave 123456
* Crear las salas que estarán disponibles para reservación

### Una vez creadas las salas, podemos ir a la ruta inicial y registrarnos / iniciar sesión como cliente para realizar reservaciones de salas en el coworking TWGroup.

[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[Laravel-backpack.com]: https://backpackforlaravel.com/presentation/img/backpack/logos/backpack_logo.svg
[Laravel-backpack-url]: https://backpackforlaravel.com/