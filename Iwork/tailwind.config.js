
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // "./resources/**/*.blade.php",
    // "./resources/**/*.js",
    // "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {

      colors:{
        'lightBlue': '#00A9FF',
        'darkBlue': '#176B87'
      }
    },
  },
  plugins: [],
}
