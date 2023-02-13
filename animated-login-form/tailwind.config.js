/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                'box': '380px',
                'inputbox': '300px'
            },
            height: {
                'box': '420px'
            },
            margin: {
                "inputbox": "35px"
            }
        },
        fontFamily: {
            poppins: ['Poppins', 'sans-serif']
        }
    },
    plugins: [],
}
