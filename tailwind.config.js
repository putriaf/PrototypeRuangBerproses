/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily:{
        'quicksand': ['Quicksand']
      },
      textColor:{
      },
      backgroundColor:{
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
