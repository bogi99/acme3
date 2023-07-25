#! /bin/bash

php -S localhost:9999 && 
npx tailwindcss -i input.css -o style.css --watch && 