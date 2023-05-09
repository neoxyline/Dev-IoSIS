/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'mono': ['"SF Mono"','"Fira Code"','"Fira Mono"','"Roboto Mono"'," monospace"],
      'sans': ["Calibri", '"Gill Sans"', '"Gill Sans MT"', '"Trebuchet MS"', "sans-serif"]
    },
    extend: {},
  },
  plugins: [],
}

