<template>
  <section class="py-10 bg-gray-50">
    <div class="max-w-6xl mx-auto text-center px-6">
      <!-- Título -->
      <h2 class="text-4xl font-extrabold text-gray-800 mb-4">
        Planes para Suscribirse
      </h2>
      <p class="text-lg text-gray-600 mb-10">
        Elige el plan que mejor se adapte a tus necesidades y empieza a disfrutar del aprendizaje personalizado.
      </p>

      <!-- Contenedor de Cartas -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Carta de Plan -->
        <SubscriptionCard
          title="Plan Básico"
          price="Gratis"
          description="Accede a contenido limitado y pruebas gratuitas."
        />
        <SubscriptionCard
          title="Plan Pro"
          price="$9.990"
          description="Accede a todo el contenido y soporte prioritario."
        />
        <SubscriptionCard
          title="Plan Premium"
          price="$14.990"
          description="Contenido exclusivo, mentorías y recursos avanzados."
        />
      </div>
    </div>
  </section>
</template>

<script>
import SubscriptionCard from "./SubscriptionCard.vue"; // Importamos el componente de carta

export default {
  name: "SubscriptionPlans",
  components: {
    SubscriptionCard,
  },
};
</script>

<style scoped>
/* Ajustes opcionales */
</style>
