/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'housify-lightest': '#F5E7D3',
        'housify-light': '#DFD0B8',
        'housify-mid': '#948979',
        'housify-dark': '#393E46',
        'housify-darkest': '#222831',
        'dark-red': '#8E1616',
      },
      fontFamily: {
        'raleway': ['Raleway', 'sans-serif',],
        'dm-serif-display' : ['DM Sans', 'serif',],
      },
    },
  },
  plugins: [],
}
