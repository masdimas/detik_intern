/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "node_modules/preline/dist/*.js",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    screens: {
      sm: "480px",
      // => @media (min-width: 480px) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }

      lg: "1024px",
      // => @media (min-width: 1024px) { ... }

      xl: "1280px",
      // => @media (min-width: 1280px) { ... }

      "2xl": "1536px",
      // => @media (min-width: 1536px) { ... }
    },
    extend: {
      backgroundImage: {
        "bg-hero": "url('../src/assets/images/hero/bg-hero.png')",
        "bg-hero-middle": "url('../src/assets/images/hero/bg-hero-middle.jpg')",
        "bg-hero-mobile": "url('../src/assets/images/hero/bg-hero-mobile.png')",
        "bg-photo-gallery":
          "url('../src/assets/images/photo-gallery/bg-photo-gallery.jpg')",
        "bg-btn-thelatest":
          "url('../src/assets/images/the-latest/bg-button.png')",
        "bg-hero-cs-desktop":
          "url('../src/assets/images/coming-soon/bg-hero-cs-desktop.png')",
        "bg-hero-cs-middle":
          "url('../src/assets/images/coming-soon/bg-hero-cs-middle.png')",
        "bg-hero-cs-mobile":
          "url('../src/assets/images/coming-soon/bg-hero-cs-mobile.png')",
        "bg-discover-main-title":
          "url('../src/assets/images/discover/main/bg-main-title.png')",
        "bg-discover-main-title-mobile":
          "url('../src/assets/images/discover/main/bg-main-title-mobile.png')",
      },
      fontFamily: {
        sans: [
          "montserrat-light",
          "montserrat-regular",
          "montserrat-medium",
          "montserrat-semibold",
          "montserrat-bold",
          "montserrat-extrabold",
          "outfit-light",
          "outfit-regular",
          "outfit-bold",
          "outfit-extrabold",
          "outfit-semibold",
          "broadsheet-ldo",
        ],
      },
    },
  },
  plugins: [
    require("preline/plugin"),
    require("flowbite/plugin"),
    require("@tailwindcss/aspect-ratio"),
  ],
};
