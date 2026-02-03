

# CRUD de Piratas: ¡Se Busca! 🏴‍☠️
<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>
¡Ahoy, marinero! Has abordado el sistema de gestión de recompensas de la Marina. Este no es un simple libro de contabilidad; es nuestra herramienta principal para mantener a raya a los piratas más temibles de los siete mares. Aquí registramos, actualizamos y damos por "capturados" a los rufianes que osan desafiar al Gobierno Mundial.

![One Piece Wanted Poster](https://i.pinimg.com/originals/79/c2/a7/79c2a7a283f233d15c6d5c33a2339308.gif)

## 🗺️ ¿De qué va esta travesía?

Este proyecto es una aplicación web construida sobre el poderoso galeón de **Laravel**, que implementa un sistema CRUD (Crear, Registrar, Actualizar, Destruir... o como nos gusta decir: ¡Cazar!) para gestionar carteles de "Se Busca" de piratas.

Inspirado en el vasto universo de One Piece, podrás dar de alta a nuevos piratas, especificar su tripulación, su rol, la recompensa por su cabeza, si han comido una Fruta del Diablo (`has_fruit`) y la fecha en que su cartel fue emitido.

## 💰 Características del Botín

*   **Listado de Recompensas:** Visualiza a todos los piratas en nuestra lista negra en una tabla clara y concisa.
*   **¡Se Busca! (Crear):** Añade un nuevo pirata al sistema con toda su información relevante. ¿Un nuevo Supernova ha aparecido? ¡Regístralo aquí!
*   **Actualizar Cartel (Actualizar):** ¿La recompensa de un pirata ha aumentado tras el último incidente? ¿Ha cambiado de tripulación? Actualiza su información en segundos.
*   **¡Pirata Capturado! (Eliminar):** Cuando un pirata es llevado ante la justicia, lo eliminamos de la lista de activos. ¡Buen trabajo, marine!

## 🛠️ Tecnologías Usadas en esta Aventura

*   **Framework:** Laravel
*   **Scaffolding:** Laravel Breeze
*   **Lenguaje:** PHP
*   **Estilos:** Tailwind CSS
*   **Base de Datos:** MySQL (o la que prefieras configurar en tu `.env`)
*   **Servidor local:** XAMPP/WAMP/LAMP o el servicio `artisan` de Laravel.

##  जहाज Preparando tu Navío (Guía de Instalación)

Para poner en marcha tu propio puesto de avanzada de la Marina, sigue estos pasos:

1.  **Clona el Repositorio:**
    ```bash
    git clone https://github.com/tu-usuario/CRUD-Breeze.git
    cd CRUD-Breeze
    ```

2.  **Instala las Dependencias del Viaje:**
    Asegúrate de tener Composer y NPM listos para la acción.
    ```bash
    composer install
    npm install
    ```

3.  **Prepara el Manifiesto (`.env`):**
    Copia el archivo de ejemplo `.env.example` y renómbralo a `.env`. En Windows puedes usar:
    ```bash
    copy .env.example .env
    ```
    Luego, configura tus credenciales de base de datos en el archivo `.env`:
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=pirates_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Iza las Velas (Genera la Clave y Migra la Base de Datos):**
    Crea una base de datos con el nombre que pusiste en el `.env` (p. ej. `pirates_db`). Luego, ejecuta estos comandos para preparar la aplicación.
    ```bash
    php artisan key:generate
    php artisan migrate
    ```

5.  **Compila los Recursos del Barco:**
    ```bash
    npm run dev
    ```

6.  **¡Leva Anclas!:**
    Inicia el servidor y que comience la caza.
    ```bash
    php artisan serve
    ```
    ¡Ahora puedes acceder a la aplicación desde `http://127.0.0.1:8000/pirates`!

## 🌊 Futuras Travesías

Este proyecto es solo el comienzo. Algunas ideas para expandir nuestro alcance incluyen:
*   Subida de imágenes para los carteles de "Se Busca".
*   Sistema de autenticación para que solo los Marines autorizados puedan gestionar la lista.
*   Relaciones entre piratas y tripulaciones.
*   Buscador y filtros avanzados (por recompensa, por fruta del diablo, etc.).