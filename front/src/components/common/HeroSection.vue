<template>
  <section class="flex flex-col items-center justify-center bg-gray-50 py-36 px-6">
    <!-- Contenedor principal -->
    <div class="text-center max-w-6xl hero-container">
      <!-- Título -->
      <h1 class="text-6xl font-extrabold text-gray-900 mb-10">
        Guías personalizadas para estudiantes
      </h1>

      <!-- Descripción -->
      <p class="text-xl text-gray-700 mb-12">
        Descubre recursos educativos, aprende de la comunidad y organiza tu aprendizaje con las mejores recomendaciones personalizadas. Todo al alcance de tu mano.
      </p>

      <!-- Botones -->
      <div class="flex justify-center gap-8">
        <!-- Botón de Registrarse -->
        <div class="uiverse-register" @click="goToRegister">
          <span class="tooltip-register">Regístrate ahora</span>
          <span>Registrarse</span>
        </div>

        <!-- Botón de Iniciar Sesión -->
        <div class="uiverse" @click="goToLogin">
          <span class="tooltip">Sé de los nuestros</span>
          <span>¡Únete!</span>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { defineComponent } from "vue";
import "../assets/UiverseButton.css"; // Importamos los estilos del botón

export default defineComponent({
  name: "HeroSection",
  methods: {
    goToRegister() {
      // Redirige al usuario a la página de registro
      this.$router.push("/register");
    },
    goToLogin() {
      // Redirige al usuario al inicio de sesión
      this.$router.push("/login");
    },
  },
});
</script>

<style scoped>
/* Fondo del contenedor de Hero Section */
.hero-container {
  background: transparent; /* Fondo completamente transparente */
  backdrop-filter: blur(20px); /* Efecto de desenfoque */
  border: 1px solid rgba(255, 255, 255, 0.3); /* Borde translúcido */
  border-radius: 2rem; /* Bordes muy redondeados */
  padding: 2rem; /* Espaciado interno */
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2); /* Sombra difusa */
  color: #000; /* Texto negro */
}

h1 {
  color: #111; /* Título negro intenso */
}

p {
  color: #333; /* Texto de descripción gris oscuro */
}
</style>
