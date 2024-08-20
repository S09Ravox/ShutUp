/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern' : "url('/src/resources/texture.jpg')"
      },
      colors: {
        'texture-red': '#5f0b0a',
        'texture-blue': '#2d2d2d',
        'solid-gray': 'rgba(45, 45, 45, 255)'
      }
    },
  },
  plugins: [],
}