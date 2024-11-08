// Search Blog
const filter = document.getElementById("filter");
const items = document.querySelectorAll(".post-item");
const notFound = document.getElementById("not-found");

filter.addEventListener("input", (e) => filterData(e.target.value));

function filterData(search) {
  let found = false;

  items.forEach((item) => {
    const title = item.querySelector("a").innerText.toLowerCase();
    if (title.includes(search.toLowerCase())) {
      item.classList.remove("hidden");
      found = true;
    } else {
      item.classList.add("hidden");
    }
  });

  if (!found) {
    notFound.classList.remove("hidden");
  } else {
    notFound.classList.hidden("hidden");
  }
}

// Navbar
const navbar = document.querySelector(".navbar-scroll");

window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    navbar.classList.add("navbar-border");
  } else {
    navbar.classList.remove("navbar-border");
  }
});
