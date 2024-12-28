import defaultTheme from "tailwindcss/defaultTheme";
import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "media",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                icon: "0px 5px 20px rgba(0, 0, 0, 0.2)",
                iconSm: "0px 2px 5px rgba(0, 0, 0, 0.2)",
                pils: "0px 7px 35px rgba(0, 0, 0, 0.2)",
                iconDark: "0px 5px 15px rgba(0,0,0,0.5)",
                iconDarkSm: "0px 0px 2px rgba(0,0,0,0.5)",
                pilsDark: "0px 7px 20px rgba(0,0,0,0.5)",
            },
        },
    },
    plugins: [daisyui],
};
