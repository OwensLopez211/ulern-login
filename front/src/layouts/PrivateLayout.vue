<template>
  <div>
    <!-- Navbar visible siempre -->
    <Navbar />

    <!-- Contenedor para las vistas -->
    <div class="bg-gray-50 min-h-screen ">
      <router-view /> <!-- Carga el componente correspondiente a la ruta activa -->
    </div>
  </div>
</template>

<script>
import Navbar from "../components/layout/Navbar.vue";
import { startSessionTimeout, stopSessionTimeout } from "../services/sessionTimeout";
import { useRouter } from "vue-router";

export default {
  name: "PrivateLayout",
  components: {
    Navbar,
  },
  setup() {
    const router = useRouter();

    const logout = () => {
      localStorage.removeItem("authToken"); // Eliminar token de autenticación
      stopSessionTimeout(); // Detener el timeout de sesión
      router.push("/login"); // Redirigir al login
    };

    // Iniciar el timeout de sesión al cargar
    startSessionTimeout(logout, 900000); // 15 minutos (900,000ms)

    return {};
  },
  beforeUnmount() {
    stopSessionTimeout(); // Detener el timeout al desmontar el componente
  },
};
</script>

<style scoped>
/* Ajustes específicos */
.pt-16 {
  padding-top: 4rem; /* Altura suficiente para el Navbar */
}
</style>
