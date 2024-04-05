const hamburger = document.getElementById("hamburger");
const navbarMenu = document.getElementById("navbar-menu");

// Hamburger menu
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("hamburger-active");
  navbarMenu.classList.toggle("hidden");
});

// Efek blur ketika layar di scroll
window.onscroll = () => {
  const header = document.querySelector("header");
  const fixedNavbar = header.offsetTop;

  if (window.scrollY > fixedNavbar) {
    header.classList.add("navbar-fixed");
  } else {
    header.classList.remove("navbar-fixed");
  }
};
