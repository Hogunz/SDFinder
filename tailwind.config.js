const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                sans: ['Inter', 'sans-serif'],
            },
        },
    },

    corePlugins: {
        aspectRatio: false,
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tw-elements/dist/plugin'),
        require('flowbite/plugin'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
