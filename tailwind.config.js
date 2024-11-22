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
      lightgreen: '#c2e4db',
      blue: '#0C8CE9',
      white: '#FFFFFF',
      darkblue: '#090535',
      yellow: '#FFD700',
      lightgray: '#f6f6f6',
      gray: '#cad4dd',
      transparent: 'transparent',
      darkgray: '#272727',
      red: '#F02B2BFF',
    },

    extend: {

    },
  },
  plugins: [],
}