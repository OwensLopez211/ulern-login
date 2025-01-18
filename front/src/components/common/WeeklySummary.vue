<template>
    <section class="bg-white shadow-lg rounded-lg p-6 max-w-6xl mx-auto mt-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Resumen Semanal</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Horas de Estudio -->
        <div class="bg-blue-100 text-blue-700 rounded-lg p-4 flex items-center">
          <div class="bg-blue-500 text-white rounded-full h-12 w-12 flex items-center justify-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 8c1.657 0 3 1.343 3 3m-6 0c0-1.657 1.343-3 3-3m0 0v4m0 4a3 3 0 11-6 0m12 0a3 3 0 11-6 0"
              />
            </svg>
          </div>
          <div class="ml-4">
            <p class="text-lg font-semibold">10 horas</p>
            <p class="text-sm text-gray-600">Horas de Estudio</p>
          </div>
        </div>
  
        <!-- Cursos Completados -->
        <div class="bg-green-100 text-green-700 rounded-lg p-4 flex items-center">
          <div class="bg-green-500 text-white rounded-full h-12 w-12 flex items-center justify-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M5 13l4 4L19 7"
              />
            </svg>
          </div>
          <div class="ml-4">
            <p class="text-lg font-semibold">3</p>
            <p class="text-sm text-gray-600">Cursos Completados</p>
          </div>
        </div>
  
        <!-- Tareas Completadas -->
        <div class="bg-yellow-100 text-yellow-700 rounded-lg p-4 flex items-center">
          <div class="bg-yellow-500 text-white rounded-full h-12 w-12 flex items-center justify-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
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
          </div>
          <div class="ml-4">
            <p class="text-lg font-semibold">8</p>
            <p class="text-sm text-gray-600">Tareas Completadas</p>
          </div>
        </div>
  
        <!-- Certificaciones Obtenidas -->
        <div class="bg-purple-100 text-purple-700 rounded-lg p-4 flex items-center">
          <div class="bg-purple-500 text-white rounded-full h-12 w-12 flex items-center justify-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 6v6l4 2m0 4H8m4-16a10 10 0 110 20 10 10 0 010-20z"
              />
            </svg>
          </div>
          <div class="ml-4">
            <p class="text-lg font-semibold">2</p>
            <p class="text-sm text-gray-600">Certificaciones Obtenidas</p>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: "WeeklySummary",
    props: {
      hoursStudied: {
        type: Number,
        default: 10,
      },
      coursesCompleted: {
        type: Number,
        default: 3,
      },
      tasksCompleted: {
        type: Number,
        default: 8,
      },
      certificationsEarned: {
        type: Number,
        default: 2,
      },
    },
  };
  </script>
  
  <style scoped>
  section {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  </style>
  