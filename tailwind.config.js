/** @type {import('tailwindcss').Config} */
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
        DarkSlateGray: '#4A6159',
        LightOrange: '#F6AE96',
        White: '#ffffff',
      },
      fontFamily: {
        Poppins: 'font-poppins',
      },

    },
  },
  plugins: [],
}