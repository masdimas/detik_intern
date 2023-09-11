var swiper = new Swiper(".mySwiper", {
  spaceBetween: 10,
  slidesPerView: 5,
  breakpoints: {
    // when window width is >= 320px
    280: {
      slidesPerView: 3,
      spaceBetween: 5,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
  },
  freeMode: true,
  watchSlidesProgress: true, // Navigation arrows
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".pg-arrow-next",
    prevEl: ".pg-arrow-prev",
  },

  thumbs: {
    swiper: swiper,
  },
});
