/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      poppins: ["Poppins", "sans-serif"],
    },
    colors: {
      green: '#33B18E',
      blue: '#0C8CE9',
      white: '#FFFFFF',
      darkblue: '#090535',
      yellow: '#FFD700',
      gray: '#cad4dd',
      transparent: 'transparent',
      darkgray: '#272727'
    },

    extend: {

    },
  },
  plugins: [],
}