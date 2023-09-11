const swiper = new Swiper(".about-swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  autoHeight: true,
  observer: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    clickable: true,
  },

  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

console.log(swiper);
