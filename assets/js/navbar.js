//Hamburger navbar in mobile display
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  navMenu.classList.toggle("active");
});

const aboutButton = document.querySelectorAll(".nav-item");

aboutButton.forEach((button) => {
  button.addEventListener("click", function handleClick(event) {
    navMenu.classList.toggle("active");
  });
});

const sections = document.querySelectorAll("section");
window.onscroll = () => {
  let current = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (pageYOffset >= sectionTop - 60) {
      current = section.getAttribute("id");
    }
  });

  aboutButton.forEach((li) => {
    // console.log(li.classList.contains(current));
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
      console.log(li.classList.contains("active"));
    }
  });
};

// for (button in aboutButton) {
//   button.addEventListener("click", () => {
//     navMenu.classList.toggle("active");
//   });
// }
