/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}", "./view/*.php"],
  theme: {
    extend: {
      textColor: {
        'logo': '#e8491d',
      },
    },
    
  },
  plugins: [],
}

