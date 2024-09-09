/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
      extend: {},
    },
    plugins: [
        require('daisyui'),
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
                "info": "#0000ff",
                "success": "#00ff00",
                "warning": "#00ff00",
                "error": "#ff0000",
              },
            },
          ],
        },

}
