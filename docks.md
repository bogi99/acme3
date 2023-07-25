now, you will need npm to be installed on your system / project  
i also use php (8.2) for the web server function and i have some php 
snippets for functionality , so you will need that too.

npm install -D tailwindcss postcss forms autoprefixer vite

npx tailwindcss init -p

input.css contents ... this is basically a it.

@tailwind base;
@tailwind components;
@tailwind utilities;

style.css

this one will start empty, read the docks file, it will be filled in.


tailwind.config.js 

should look like this, it will tell npx where to look and compile your specific css file

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




Start your local dev server using the built in php web server. Note that combined with frameworks, it is better to use their 
provided local server, but since this project is a tailwindcss only development, it has none of those 

php -S localhost:9999

this is the ( --watch ) on the fly compiler. it scans your files in your given path (tailwind.config.js ) for the css selectors you actually use
and put's them on 

npx tailwindcss -i input.css -o style.css --watch