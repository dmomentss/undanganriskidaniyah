/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: '16px'
        },
        extend: {
            animation: {
                'spin-slow': 'spin 3s linear infinite'

            },
            fontSize: {
                xss: ['8px', '14px'],
            }
        },
        fontFamily: {
            poppins: ['Poppins'],
            'gyahegi': ['gyahegi', 'sans-serif'],
            'classy': ['classy', 'sans-serif'],
            'mileadilan': ['mileadilan', 'sans-serif'],
            'soage': ['soage', 'sans-serif'],
            'charlotte': ['charlotte', 'sans-serif'],
        },
    },
    plugins: [],
}
