import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('daisyui'), typography
    ],

    daisyui: {
        themes: [
        {
            mytheme: {
                "primary": "#01E3D8",
                "secondary": "#00F5A0",
                "accent": "#00D9F5",
                "neutral": "#232323",
                "base-100": "#282828",
                "icon": "#304E52",
                "info": "#0000ff",
                "success": "#00ff00",
                "warning": "#00ff00",
                "error": "#ff0000",
            },
            },
        ],
        },

};
