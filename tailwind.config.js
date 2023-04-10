const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
<<<<<<< HEAD
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
=======
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
>>>>>>> 2108107010011
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

<<<<<<< HEAD
    plugins: [require('@tailwindcss/forms')],
=======
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
>>>>>>> 2108107010011
};
