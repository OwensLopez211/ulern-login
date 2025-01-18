<template>
  <div class="flex flex-col bg-white rounded-3xl shadow-md">
    <!-- Sección superior con título y precio -->
    <div class="px-6 py-8 sm:p-10 sm:pb-6">
      <div class="grid items-center justify-center w-full grid-cols-1 text-left">
        <!-- Título del plan -->
        <div>
          <h2 class="text-lg font-medium tracking-tighter text-gray-600 lg:text-3xl">
            {{ title }}
          </h2>
          <p class="mt-2 text-sm text-gray-500">{{ description }}</p>
        </div>
        <!-- Precio del plan -->
        <div class="mt-6">
          <p>
            <span class="text-5xl font-light tracking-tight text-black">
              {{ price }}
            </span>
            <span class="text-base font-medium text-gray-500">/mes</span>
          </p>
        </div>
      </div>
    </div>
    <!-- Botón inferior -->
    <div class="flex px-6 pb-8 sm:px-8">
      <a
        aria-describedby="tier-company"
        class="flex items-center justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full hover:bg-transparent hover:border-black hover:text-black focus:outline-none focus-visible:outline-black text-sm focus-visible:ring-black"
        href="#"
      >
        Suscribirse
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: "SubscriptionCard",
  props: {
    title: {
      type: String,
      required: true,
    },
    price: {
      type: String,
      required: true,
    },
    description: {
      type: String,
      required: true,
    },
  },
};
</script>

<style scoped>
/* Estilos adicionales si los necesitas */
</style>
