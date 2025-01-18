let logoutTimer;

const startSessionTimeout = (logoutCallback, timeout = 100) => {
  // timeout: tiempo de inactividad en milisegundos (por defecto: 15 minutos = 900000ms)

  // Limpiar el temporizador previo
  if (logoutTimer) {
    clearTimeout(logoutTimer);
  }

  // Configurar el temporizador
  logoutTimer = setTimeout(() => {
    logoutCallback(); // Llama al callback para cerrar sesión
  }, timeout);

  // Reiniciar el temporizador en eventos de actividad del usuario
  document.addEventListener("mousemove", resetTimeout);
  document.addEventListener("keypress", resetTimeout);
  document.addEventListener("click", resetTimeout);
  document.addEventListener("scroll", resetTimeout);
};

const resetTimeout = () => {
  clearTimeout(logoutTimer);
  startSessionTimeout(logoutCallback, timeout); // Reinicia el temporizador
};

const stopSessionTimeout = () => {
  clearTimeout(logoutTimer); // Detiene el temporizador
  document.removeEventListener("mousemove", resetTimeout);
  document.removeEventListener("keypress", resetTimeout);
  document.removeEventListener("click", resetTimeout);
  document.removeEventListener("scroll", resetTimeout);
};

export { startSessionTimeout, stopSessionTimeout };
