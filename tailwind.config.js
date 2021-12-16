const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
   /* mode: 'jit',*/
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'ail': ['Poppins']
        },
        fontWeight: {
            thin: 100,
            light: 300,
            normal: 400,
            bold: 700,
        },
        extend: {
            fontFamily: {
                sans: ['ail', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'kh_main': '#8C2A86',
                'kh_mate': '#A65DA1',
                'kh_clair': '#BF93BC',
                'kh_black': '#090A0D',
                'kh_white': '#F2F2F2',
            },
            textColor: {
                'kh_main': '#8C2A86',
                'kh_mate': '#A65DA1',
                'kh_clair': '#BF93BC',
                'kh_black': '#090A0D',
                'kh_white': '#F2F2F2',
                'primary': '#3490dc',
                'secondary': '#ffed4a',
                'danger': '#e3342f',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
