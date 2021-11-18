module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        green: {
          secondary: '#B5D254',
          secondary_1: '#9BB14D',
          secondary_2: '#D5EAE3',
          primary: '#0c713d',
          primary_1: '#275042',
        },
        pink: {
          light: '#ff7ce5',
          DEFAULT: '#ff49db',
          dark: '#ff16d1',
        },
        gray: {
          darkest: '#1f2d3d',
          dark: '#3c4858',
          DEFAULT: '#c0ccda',
          light: '#e0e6ed',
          lightest: '#f9fafc',
        }
      },
      fontFamily:{
        lora:['Lora', 'serif'],
        petemoss:['Comforter', 'cursive'],
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
