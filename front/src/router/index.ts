import { createRouter, createWebHistory } from "vue-router";
import HomePage from "../pages/HomePage.vue";
import RegisterForm from "../components/forms/RegisterForm.vue";
import LoginForm from "../components/forms/LoginForm.vue";
import PrivateLayout from "../layouts/PrivateLayout.vue"; // Layout para vistas privadas
import Dashboard from "../components/layout/Dashboard.vue";
import Profile from "../components/Profile.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: HomePage,
  },
  {
    path: "/register",
    name: "Register",
    component: RegisterForm,
  },
  {
    path: "/login",
    name: "Login",
    component: LoginForm,
  },
  {
    path: "/",
    component: PrivateLayout, // Layout base para rutas protegidas
    meta: { requiresAuth: true }, // Aplicar protección a todas las rutas hijas
    children: [
      {
        path: "dashboard",
        name: "Dashboard",
        component: Dashboard,
      },
      {
        path: "perfil",
        name: "Profile",
        component: Profile,
      },
      // Agrega más rutas protegidas aquí
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

// Protección de rutas (Auth Guard)
router.beforeEach((to, from, next) => {
  const token = localStorage.getItem("authToken");

  if (to.name === "Login" && token) {
    next({ name: "Dashboard" }); // Si el usuario ya está autenticado, redirigir al dashboard
  } else if (to.meta.requiresAuth && !token) {
    next({ name: "Login" }); // Si no está autenticado, redirigir al login
  } else {
    next(); // Continuar si no hay problemas
  }
});

export default router;
