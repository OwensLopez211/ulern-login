<template>
    <div>
      <!-- HeaderBar en la parte superior -->
      <HeaderBar />
  
      <!-- HeroSection debajo del HeaderBar -->
      <HeroSection />
  
      <!-- SubscriptionPlans debajo del HeroSection -->
      <SubscriptionPlans />
    </div>
  </template>
  
  <script lang="ts">
  import { defineComponent } from "vue";
  import HeaderBar from "../components/layout/HeaderBar.vue"; // Importa el HeaderBar
  import HeroSection from "../components/layout/HeroSection.vue"; // Importa el HeroSection
  import SubscriptionPlans from "../components/layout/SubscriptionPlans.vue"; // Importa los planes de suscripción
  
  export default defineComponent({
    name: "HomePage",
    components: {
      HeaderBar, // Registra el HeaderBar
      HeroSection, // Registra el HeroSection
      SubscriptionPlans, // Registra el componente SubscriptionPlans
    },
  });
  </script>
  
  <style scoped>
  /* Estilos opcionales para personalizar la página */
  </style>
  