/** @type {import('tailwindcss').Config} */
import animations from "@midudev/tailwind-animations";

module.exports = {
  content: ["./public/**/*.{php,html,js}", "./components/**/*.{php,html,js}"],
  theme: {
    extend: {},
  },
  plugins: [animations],
};

