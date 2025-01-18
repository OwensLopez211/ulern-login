# ulern-login

Descripción

Sistema de autenticación para Edulern desarrollado con las mejores prácticas en seguridad y usabilidad. Este sistema permite a los usuarios registrarse, iniciar sesión y gestionar sus cuentas.

Requisitos previos

Backend: Laravel (versión 10 o superior).

Frontend: React (versión 18 o superior).

Entorno:

PHP >= 8.1 con Composer instalado.

Node.js >= 18 con npm o yarn.

Base de datos: MySQL/PostgreSQL (o la que utilices).

Instalación

1. Clona el repositorio

git clone https://github.com/tuusuario/edulern.git
cd edulern

2. Configura el entorno del backend

Copia el archivo .env.example y renómbralo a .env:

cp .env.example .env

Configura las credenciales de tu base de datos y otros ajustes necesarios en el archivo .env.

3. Instala las dependencias del backend

composer install
php artisan key:generate
php artisan migrate

4. Configura el frontend

Navega a la carpeta del frontend:

cd frontend

Instala las dependencias del frontend:

npm install

Ejecuta el entorno de desarrollo del frontend:

npm run dev

5. Inicia el servidor del backend

En el directorio principal, ejecuta el siguiente comando:

php artisan serve

El backend estará disponible en http://localhost:8000 por defecto.
