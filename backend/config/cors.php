<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Define las rutas a las que se aplicará CORS.
    'allowed_methods' => ['*'], // Métodos HTTP permitidos (GET, POST, PUT, DELETE, etc.).
    'allowed_origins' => ['*'], // Dominios permitidos. Cambia '*' por una lista de dominios específicos si es necesario.
    'allowed_origins_patterns' => [], // Patrones de dominios permitidos.
    'allowed_headers' => ['*'], // Encabezados permitidos.
    'exposed_headers' => [], // Encabezados expuestos al cliente.
    'max_age' => 0, // Tiempo máximo en segundos que las respuestas pueden ser almacenadas en caché.
    'supports_credentials' => false, 
];
