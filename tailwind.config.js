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
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
