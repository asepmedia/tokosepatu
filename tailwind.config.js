/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#00ABB3',
        'secondary': '#3C4048',
        'accent-1': '#B2B2B2',
        'accent-2': '#EAEAEA'
      }
    },
  },
  plugins: [],
}
