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
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#4f46e5",
                secondary: "#64748b",
                dark: "#020617",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [],
};
