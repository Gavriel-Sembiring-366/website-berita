/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    "./resources/views/components/header-navbar.blade.php",
    "./resources/views/components/user-navbar.blade.php",
    "./resources/views/login.blade.php",
    "./resources/views/register.blade.php",

  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}

