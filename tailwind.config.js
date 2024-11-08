/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "index.html"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "1.5rem",
      },
    },
    extend: {
      fontFamily: {
        heebo: "Heebo",
      },
      colors: {
        primary: "#FF6464",
        secondary: "#00A8CC",
        teritary: "#EDF7FA",
        dark: "#21243D",
        light: "#8695A4",
        "badge-color": "#142850",
      },
    },
  },
  plugins: [require("daisyui")],
};
