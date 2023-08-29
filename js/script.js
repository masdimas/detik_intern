const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
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

// window.onscroll = function () {
//   scrollFunction();
// };

// function scrollFunction() {
//   const navbar = document.getElementById("main-navbar");
//   const navbarClassyYouthYamaha = document.getElementById(
//     "ClassyYamahaYouthFestivalShare"
//   );
//   if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
//     navbar.style.backgroundColor = "rgba(255,255,255, 1)";
//     navbarClassyYouthYamaha.style.opacity = "1";
//   } else {
//     navbar.style.backgroundColor = "rgba(255,255,255, 0)";
//     navbarClassyYouthYamaha.style.opacity = "0";
//   }
// }

//Hamburger navbar in mobile display
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const auth = document.querySelector(".authentification");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
  auth.classList.toggle("active");
});

const registerBtn = document.querySelectorAll(".register-button");
const registerLink = document.getElementById("nav-item-register-btn");

registerBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    registerLink.click();
  });
});
