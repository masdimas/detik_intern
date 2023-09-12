const navMenu = document.querySelector(".nav-menu");
const navBar = document.querySelector(".nav-bar");
const aboutButton = navBar.querySelectorAll(".nav-link");

const sections = document.querySelectorAll("section");
const heroContent = document.query;
window.onscroll = () => {
  let current = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (pageYOffset >= sectionTop - 60) {
      current = section.getAttribute("id");
    }
  });

  aboutButton.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
};

document.getElementById("logout-button").addEventListener("click", function () {
  // Use JavaScript to change the 'login' value to 0 when Logout is clicked
  console.log(window.location.href);
  window.location.href = "?login=0";
});

document.getElementById("login-button").addEventListener("click", function () {
  // Use JavaScript to change the 'login' value to 0 when Logout is clicked
  console.log(window.location.href);
  window.location.href = "?login=1";
});
