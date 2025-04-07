/** @type {import('tailwindcss').Config} */
export default {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
    ],
        theme: {
          extend: {
            colors: {
              'primary': '#244087',
              'secondary': '#4C7562',
            },
            FontFaceSet: {'archivo narrow': ' "Archivo Narrow", sans-serif;'},
            fontFamily: {
              'archivo': ['Archivo Narrow', 'sans-serif'],
            },
            fontSize: {
              'xxs': '0.5rem',
              'xxl': '1.75rem',
              'xxxl': '2.25rem',
            },
          },
          screens: {
            'custom': '1300px',
            'xxs': '320px',
            'xs': '480px',
            'sm': '640px',
            'md': '770px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1440px',
          },
        },
        plugins: [],
    }
