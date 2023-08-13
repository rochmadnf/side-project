const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        screens: {
            ...defaultTheme.screens,
            unmobile: { raw: "(min-height: 700px)" },
        },
        extend: {
            boxShadow: {
                0: "0 0 10px 0 rgba(0,0,0,0.5)",
            },
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
                alatsi: ["Alatsi", ...defaultTheme.fontFamily.serif],
            },
        },
    },
    plugins: [require("flowbite/plugin"), require("@tailwindcss/typography")],
};
