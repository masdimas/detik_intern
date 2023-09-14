var swiper = new Swiper(".mySwiper", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 5,
  freeMode: true,
  watchSlidesProgress: true,

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
    997: {
      slidesPerView: 6,
      spaceBetween: 10,
    },
  },
  freeMode: true,
  watchSlidesProgress: true, // Navigation arrows
});
var swiper2 = new Swiper(".mySwiper2", {
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  spaceBetween: 10,
  navigation: {
    nextEl: ".pg-arrow-next",
    prevEl: ".pg-arrow-prev",
  },

  thumbs: {
    swiper: swiper,
  },
});
