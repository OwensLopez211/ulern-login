<template>
    <div>
      <!-- Navbar visible siempre -->
      <Navbar />
  
      <!-- Contenedor para las vistas -->
      <div class="pt-16 bg-gray-50 min-h-screen">
        <router-view /> <!-- Carga el componente correspondiente a la ruta activa -->
      </div>
    </div>
  </template>
  
  <script>
  import Navbar from "../components/layout/Navbar.vue";
  
  export default {
    name: "PrivateLayout",
    components: {
      Navbar,
    },
  };
  </script>
  
  <style scoped>
  /* Ajustes específicos si es necesario */
  </style>
  