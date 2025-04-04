/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],  // <-- Comma added here
    theme: {
        extend: {
            fontFamily: {
                custom: ['Oswald', 'sans-serif'],
            },
        },
    },
    plugins: [],
}