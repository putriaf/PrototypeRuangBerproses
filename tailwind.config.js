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
        'quicksand': ['Quicksand'],
        'montserrat': ['Montserrat']
      },
      textColor:{
      },
      backgroundColor:{
      },
      backgroundImage: {
        'jumbotron-home': "url('/img/illustrations/jumbotron-home.png');" 
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
