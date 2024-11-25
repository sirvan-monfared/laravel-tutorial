import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    safelist: ['bg-teal-500', 'bg-amber-500', 'bg-rose-500'],

    theme: {
        extend: {
            fontFamily: {
                sans: ['IRANSans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
