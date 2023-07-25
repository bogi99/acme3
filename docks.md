npm install -D tailwindcss postcss forms autoprefixer vite

npx tailwindcss init -p

input.css
@tailwind base;
@tailwind components;
@tailwind utilities;

style.css

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [],
}



php -S localhost:9999

npx tailwindcss -i input.css -o style.css --watch