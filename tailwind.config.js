/** @type {import('tailwindcss').Config} */
/** @type {import('tailwindcss').Config} */


module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {

    extend: {
      colors: {
        DarkSlateGray: '#4A6159',
        LightOrange: '#F6AE96',
        White: '#ffffff',
        dark: '#020202',
      },
      fontFamily: {
        Poppins: 'font-poppins',
    
      },

    },
  },
  plugins: [],
}
