<template>
    <div>
      <LoginForm />
    </div>
  </template>
  
  <script>
  import { defineComponent } from "vue";
  import { useRouter } from "vue-router";
  import LoginForm from "@/components/forms/LoginForm.vue"; // Asegúrate de que la ruta sea correcta
  
  export default defineComponent({
    name: "LoginPage",
    setup() {
      const router = useRouter();
  
      // Verificar si el token ya existe
      const token = localStorage.getItem("authToken");
      if (token) {
        // Redirigir al dashboard si ya está autenticado
        router.push("/dashboard");
      }
  
      return {};
    },
  });
  </script>
  