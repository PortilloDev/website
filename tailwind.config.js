import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Open Sans', 'sans-serif'],
            },
            colors: {
                primary: '#f8f4f4', // blanco
                secondary: '#b5cbe1', // Azul claro
                light: '#fadb78', // Amarillo claro
                yellow_strong: '#d7b64b',// Amarillo fuerte
                blue_button: '#547ca2', // Azul botón
              },
        },
    },

    plugins: [forms],
};
