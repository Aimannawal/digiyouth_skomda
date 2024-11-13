/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        main : '#B13437',
        dark : '#323232'
      },
      backgroundImage:{
        bg_waves : 'assets/bg-waves.png',
      },
      screens:{
        'sm' : '430px'
      }
    },
  },
  plugins: [],
}

