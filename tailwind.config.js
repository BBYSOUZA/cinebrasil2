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
          },
          screens: {
            'custom': '1300px',
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1440px',
          },
        },
        plugins: [],
    }
