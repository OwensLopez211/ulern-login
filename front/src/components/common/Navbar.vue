<template>
  <nav class="bg-gray-900 text-white px-8 py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center">
        <router-link to="/" class="flex items-center space-x-2 hover:opacity-80 transition">
          <span class="text-2xl font-bold tracking-tight">EduLearn</span>
        </router-link>
      </div>

      <!-- Menu -->
      <ul class="hidden md:flex space-x-8 text-sm font-medium">
        <li>
          <router-link to="/dashboard" class="hover:text-blue-400 transition">Dashboard</router-link>
        </li>
        <li>
          <router-link to="/cursos" class="hover:text-blue-400 transition">Cursos</router-link>
        </li>
        <li>
          <router-link to="/foro" class="hover:text-blue-400 transition">Foro</router-link>
        </li>
        <li>
          <router-link to="/recursos" class="hover:text-blue-400 transition">Recursos</router-link>
        </li>
        <li>
          <router-link to="/contacto" class="hover:text-blue-400 transition">Contacto</router-link>
        </li>
      </ul>

      <!-- User Options -->
      <div class="relative">
        <!-- Perfil (Avatar) -->
        <button
          @click="toggleMenu"
          class="flex items-center justify-center w-10 h-10 bg-blue-500 rounded-full focus:outline-none"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-white"
            viewBox="0 0 24 24"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 8a7 7 0 1114 0H5z"
              clip-rule="evenodd"
            />
          </svg>
        </button>

        <!-- Menú desplegable -->
        <div
          v-if="menuOpen"
          class="absolute right-0 mt-2 bg-white text-gray-800 shadow-lg rounded-md w-40 py-2 z-10"
        >
          <router-link
            to="/perfil"
            class="block px-4 py-2 hover:bg-gray-100 transition"
            @click="closeMenu"
          >
            Perfil
          </router-link>
          <router-link
            to="/dashboard"
            class="block px-4 py-2 hover:bg-gray-100 transition"
            @click="closeMenu"
          >
            Dashboard
          </router-link>
          <button
            @click="logout"
            class="block w-full text-left px-4 py-2 hover:bg-gray-100 transition"
          >
            Cerrar Sesión
          </button>
        </div>
      </div>
    </div>
  </nav>
</template>

---

### **Script**

```javascript
<script>
import { defineComponent } from "vue";

export default defineComponent({
  name: "Navbar",
  data() {
    return {
      menuOpen: false, // Estado para el menú desplegable
    };
  },
  methods: {
    toggleMenu() {
      this.menuOpen = !this.menuOpen; // Alternar el menú
    },
    closeMenu() {
      this.menuOpen = false; // Cerrar el menú
    },
    logout() {
      localStorage.removeItem("authToken"); // Eliminar el token
      this.closeMenu(); // Cerrar el menú
      this.$router.push("/login"); // Redirigir al login
    },
  },
});
</script>
