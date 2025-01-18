# Edulern Login

Sistema de autenticación para **Edulern**, desarrollado siguiendo las mejores prácticas en seguridad y usabilidad. Este sistema permite a los usuarios registrarse, iniciar sesión y gestionar sus cuentas.

## **Requisitos previos**

- **Backend**: Laravel (versión 11).
- **Frontend**: Vue 3
  
### **Entorno**

- **PHP** >= 8.1 con Composer instalado.
- **Node.js** >= 18 con npm
- **Base de datos**: MySQL
---

## **Instalación**

### **1. Clona el repositorio**

```bash
git clone https://github.com/OwensLopez211/ulern-login
cd ulern-login
```

### **2. Configura el entorno del backend**

Configura las credenciales de tu base de datos y otros ajustes necesarios en el archivo `.env`.

### **3. Instala las dependencias del backend**

Ejecuta los siguientes comandos:

```bash
composer install
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
