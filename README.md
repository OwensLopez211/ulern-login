# Edulern Login

Sistema de autenticación para **Edulern**, desarrollado siguiendo las mejores prácticas en seguridad y usabilidad. Este sistema permite a los usuarios registrarse, iniciar sesión y gestionar sus cuentas.

## **Requisitos previos**

- **Backend**: Laravel (versión 10 o superior).
- **Frontend**: React (versión 18 o superior).

### **Entorno**

- **PHP** >= 8.1 con Composer instalado.
- **Node.js** >= 18 con npm o yarn.
- **Base de datos**: MySQL/PostgreSQL (o la base de datos que prefieras).

---

## **Instalación**

### **1. Clona el repositorio**

```bash
git clone https://github.com/tuusuario/edulern.git
cd edulern
```

### **2. Configura el entorno del backend**

Copia el archivo `.env.example` y renómbralo a `.env`:

```bash
cp .env.example .env
```

Configura las credenciales de tu base de datos y otros ajustes necesarios en el archivo `.env`.

### **3. Instala las dependencias del backend**

Ejecuta los siguientes comandos:

```bash
composer install
php artisan key:generate
php artisan migrate
```

### **4. Configura el frontend**

Navega a la carpeta del frontend:

```bash
cd frontend
```

Instala las dependencias del frontend:

```bash
npm install
```

Ejecuta el entorno de desarrollo del frontend:

```bash
npm run dev
```

### **5. Inicia el servidor del backend**

En el directorio principal, ejecuta el siguiente comando:

```bash
php artisan serve
```

El backend estará disponible en [http://localhost:8000](http://localhost:8000) por defecto.

---

## **Notas adicionales**

- Asegúrate de tener las extensiones necesarias de PHP instaladas (como `pdo_mysql` o `pdo_pgsql`, dependiendo de la base de datos que uses).
- Puedes personalizar el puerto del backend usando la opción `--port`:
  ```bash
  php artisan serve --port=8080
  ```
- Verifica que las variables de entorno en `.env` coincidan con las configuraciones de tu entorno local o de producción.
