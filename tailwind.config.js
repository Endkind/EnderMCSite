import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                mono: ["JetBrains Mono", "monospace"],
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                dark: {
                    background: "#1f1f1f",
                    surface: "#2b2b2b",
                    text: "#e5e5e5",
                    muted: "#737373",
                    border: "#444", 
                },
                brand: {
                    violet: '#6400d4',
                },
            },
        },
    },
    darkMode: 'class',
    plugins: [],
};
