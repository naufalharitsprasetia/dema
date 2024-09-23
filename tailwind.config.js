/**
 * @format
 * @type {import('tailwindcss').Config}
 */

export default {
  content: ["./resources/**/*.blade.php"],
  theme: {
    extend: {
      colors: {
        primary: "#04364A",
        secondary: "#BBE1FA",
        third: "#3282B8",
        fourth: "#0365A8",
        fifth: "#01131E",
        sixth: "#FF6614",
        seventh: "#77FFF6",
      },
      fontFamily: {
        arabic: ["arabic-lpmq"],
        estetik: ["estetik"],
        trajan: ["trajan"],
        trajanBold: ["trajan-bold"],
        poppins: ["Poppins"],
        montserrat: ["Montserrat"],
        montaga: ["Montaga"],
      },
    },
  },
  plugins: [],
};
