import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                background: '#142645',  // Dark Blue
                accent: '#ffffff',       // Light Blue
                highlights: '#ffffff',   // White
                text: '#d1d5db',         // Gray
            },
        },
    },
    plugins: [],
};
