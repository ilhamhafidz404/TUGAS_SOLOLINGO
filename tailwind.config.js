/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./app/Views/**/*.{php}"],
  content: ["./app/Views/DashboardView.php"],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: ["light"],
  },
  plugins: [require("daisyui")],
};
