/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./app/Views/**/*.{php}"],
  content: [
    "./app/Views/DashboardView.php",
    "./app/Views/auth/LoginView.php",
    "./app/Views/auth/RegisterView.php",
  ],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: ["light"],
  },
  plugins: [require("daisyui")],
};
