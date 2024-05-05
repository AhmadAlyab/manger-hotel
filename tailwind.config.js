import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    // use `purge` instead of `content` if using TailwindCSS v2.x
    content: [
        './vendor/usernotnull/tall-toasts/config/**/*.php',
        './vendor/usernotnull/tall-toasts/resources/views/**/*.blade.php',
        // etc...
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
