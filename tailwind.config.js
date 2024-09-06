/**
 * @format
 * @type {import('tailwindcss').Config}
 */

export default {
  content: ["./resources/**/*.blade.php"],
  theme: {
    extend: {
      colors: {
        primary: "#16aebc",
      },
      fontFamily: {
        arabic: ["arabic-lpmq"],
        estetik: ["estetik"],
        trajan: ["trajan"],
        trajanBold: ["trajan-bold"],
        poppins: ["Poppins"],
      },
    },
  },
  plugins: [],
};
