<template>
  <header class="bg-white p-4 flex justify-between items-center rounded-md shadow-sm">
    <!-- Logo y Nombre -->
    <div class="flex items-center gap-2">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5 text-gray-600"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M3 10h11M9 21l-6-6m0 0l6-6m-6 6h18"
        />
      </svg>
      <span class="text-sm font-medium text-gray-700">EduLearn</span>
    </div>

    <!-- Botón -->
    <router-link to="/login" class="btn-12">
      <span>Iniciar Sesión</span>
    </router-link>
  </header>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import "../assets/Button12.css"; /* Importa el archivo CSS externo */

export default defineComponent({
  name: "HeaderBar",
});
</script>

<style scoped>
/* Estilo adicional para el header */
header {
  border: 1px solid #e5e7eb; /* Línea tenue */
}
</style>
