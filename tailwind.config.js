module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    customForms: theme => ({
      default: {
        radio: {
          '&:focus': {
            borderColor: theme('colors.white'),
          },
        },
      },
    }),
    extend: {
      colors: {
        red: {
          primary: "#C92229",
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
  plugins: [
    require("@tailwindcss/forms")({
      strategy: 'class',
    }),
  ],
}