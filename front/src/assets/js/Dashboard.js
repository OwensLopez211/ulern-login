import Chart from "chart.js/auto";

export function renderCharts() {
  // Gráfico de Horas de Estudio
  const studyHoursCtx = document.getElementById("studyHoursChart").getContext("2d");
  new Chart(studyHoursCtx, {
    type: "doughnut",
    data: {
      labels: ["Estudio", "Tiempo libre"],
      datasets: [
        {
          data: [12, 36],
          backgroundColor: ["#3b82f6", "#e5e7eb"],
          hoverBackgroundColor: ["#2563eb", "#d1d5db"],
        },
      ],
    },
  });

  // Gráfico de Progreso Semanal
  const weeklyProgressCtx = document.getElementById("weeklyProgressChart").getContext("2d");
  new Chart(weeklyProgressCtx, {
    type: "line",
    data: {
      labels: ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
      datasets: [
        {
          label: "Progreso (%)",
          data: [20, 35, 50, 65, 80, 95, 100],
          borderColor: "#9333ea",
          backgroundColor: "rgba(147, 51, 234, 0.2)",
          tension: 0.4,
          fill: true,
        },
      ],
    },
  });

  // Gráfico de Cursos Completados
  const completedCoursesCtx = document.getElementById("completedCoursesChart").getContext("2d");
  new Chart(completedCoursesCtx, {
    type: "bar",
    data: {
      labels: ["Enero", "Febrero", "Marzo", "Abril"],
      datasets: [
        {
          label: "Cursos Completados",
          data: [3, 5, 8, 10],
          backgroundColor: "#10b981",
          hoverBackgroundColor: "#047857",
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  });
}
