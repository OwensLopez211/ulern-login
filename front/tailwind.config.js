module.exports = {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {
      boxShadow: {
        neo: "20px 20px 60px #bebebe, -20px -20px 60px #ffffff",
      },
      borderRadius: {
        neo: "50px",
      },
    },
  },
  plugins: [],
};
