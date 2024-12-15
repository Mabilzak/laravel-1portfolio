/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            inter: ["Inter, Arial, Helvetica, sans-serif"],
            spaceGrotesk: ["Space Grotesk, Arial, Helvetica, sans-serif"],
        },
        colors: {
            mBlack: "#131313",
            mWhite: "#FBFBFB",
            putih: "#fcfcfc",
            biruTua: "#31489E",
            abu: "#d3d3d3",
            mGhostPepper: "#D3FE89", // Hijau Muda
            mRebel: "#504718", // Hijau Kukus
            mChili: "#eb450e", //Merah
            mFink: "#FCEBD6", //Pink
        },
        extend: {},
    },
    plugins: [require("tailwind-scrollbar")({ nocompatible: true })],
};
