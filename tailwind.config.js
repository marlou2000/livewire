/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  variants: {
    extend:{
      display: ['group-focus'],
      opacity: ['group-focus'],
      inset: ['group-focus']
    }
  },
  plugins: [],
}

