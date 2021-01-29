module.exports = {
  purge: {
      content: [
          './resources/**/*.antlers.html',
          './resources/**/*.blade.php',
          './content/**/*.md'
      ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
        extend: {
            colors: {
                black: '#1a1a1a',
                beige: '#f7f4f0'
            }
        },
        fontFamily:{
            sans: ['Marcellus', 'ui-sans-serif', 'system-ui']
        }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
