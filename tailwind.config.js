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
        'pale-yellow': '#FAFAF2',
        'rb-light-orange': '#FB8D66',
        'pale-orange': '#FB8D66',
        'primary-dark-blue': '#1D1F4E'
      },
      backgroundImage: {
        'jumbotron-home': "url('/img/illustrations/jumbotron-home.png');", 
        'hero-procounseling': "url('/img/illustrations/hero-professional-counseling.png');",
        'hero-sg': "url('/img/illustrations/hero-support-group.png');",
        'hero-peercounseling': "url('/img/illustrations/hero-peer-counseling.jpg');"
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
