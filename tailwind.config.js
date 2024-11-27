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
        fontSize: {
            xxs: '0.5rem',
            xs: '0.7rem',
            sm: '0.8rem',
            base: '1rem',
            lg: '1.1rem',
            xl: '1.25rem',
            '2xl': '1.563rem',
            '3xl': '1.953rem',
            '4xl': '2.441rem',
            '5xl': '3.052rem',

        },
        extend: {
            fontFamily: {
                sans: ['IRANSans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
