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
            fontFamily: {
                sans: ['Outfit', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    50:  '#e8f7fd',
                    100: '#d0f0fb',
                    200: '#a1e1f7',
                    300: '#72d2f3',
                    400: '#3cbfec',
                    500: '#09A9E3',  // logo sky blue rgb(9,169,227)
                    600: '#0789ba',
                    700: '#056a91',
                    800: '#034c68',
                    900: '#022e3f',
                    950: '#011e2a',
                },
                dark: {
                    DEFAULT: '#0b0b0b',
                    light:   '#1a1a1a',
                    footer:  '#EFECE5',  // Awura warm off-white footer
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
};
