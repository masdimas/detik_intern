const swiper = new Swiper(".swiper", {
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

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

console.log(swiper);
