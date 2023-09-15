/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [

    "./**/*.{html,js,php}"
  ],
  theme: {
    extend: {
      colors: {
        "primaryBlue": "#1267A0",
        "primaryGray": "#7B878F",
        "primaryBlack": "#1F1F1F",
        "secondaryGray": "#808080",
        "secondaryGold": "#F4CB95",
      },
      fontFamily: {
        display: ['Inter', "sans-serif"], 
      },
    },
  },
  plugins: [],
}

