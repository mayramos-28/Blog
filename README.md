# Blog General

Este proyecto es un blog básico desarrollado utilizando el framework Laravel y se ha configurado con contenedores Docker para facilitar el desarrollo y la implementación.

# Despliegue
El proyecto se ha desplegado usando Railway, una plataforma de despliegue en la que se puede importar proyectos o desarrollar con ella localmente y luego desplegarla en la nube.
    - EN el siguiente link puede echarse un vistazo al blog:
        https://wiber-pt-production.up.railway.app/posts

## Características

- Autenticación de administradores para acceder a las funcionalidades de gestión de posts.
- Publicación, edición y eliminación de posts.
- Visualización de todos los posts en la página principal.
- Diseño responsive para una experiencia óptima en dispositivos móviles.
- Inicialización con datos de prueba: Este proyecto se configura inicialmente con datos de prueba para facilitar la demostración y el desarrollo. 
- Credenciales de administrador:

    - Usuario: admin
    - Contraseña: admin

  Puedes utilizar estas credenciales para publicar, editar y eliminar posts. Es importante tener en cuenta que, en un entorno de producción real, se deben configurar credenciales adecuadas y seguir        buenas prácticas de seguridad para proteger los datos sensibles.

Estas credenciales se pueden utilizar para acceder al panel de administración y realizar acciones como crear, editar y eliminar publicaciones.

## Tecnologías utilizadas
<!-- This section should list any major frameworks that you built your project using. Here are a few examples.-->
- HTML
- CSS
- PHP
- [Laravel](https://laravel.com/)
- [Docker](https://www.docker.com/)
- [Boostrap](https://getbootstrap.com/)

## Requisitos previos

- Docker
- Docker Compose

## Instalación

1. Clona este repositorio en tu máquina local.
2. En el directorio del proyecto, ejecuta el comando `make start` para construir y levantar los contenedores Docker.
3. Accede al contenedor de la aplicación ejecutando el comando `make shell`.
4. Ejecuta `composer install` dentro del contenedor de la aplicación para instalar las dependencias.
5. Copia el archivo `.env.example` y renómbralo a `.env`. Luego, actualiza las variables de entorno en el archivo `.env` con la configuración de tu base de datos dentro del contenedor (puedes utilizar el servicio de base de datos proporcionado por Docker Compose).
6. Genera una nueva clave de aplicación ejecutando el comando `php artisan key:generate`.
7. Ejecuta las migraciones de la base de datos dentro del contenedor de la aplicación con el comando `php artisan migrate`.
8. El blog estará disponible en `http://localhost:8000`.

## Contacto

- https://www.linkedin.com/in/mayra-mosquera/
- mayra28limo@gmail.com




