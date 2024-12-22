
  document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar_div");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) { // Adjust the scroll threshold as needed
            navbar.classList.add("shadow", "sticky-menu");
        } else {
            navbar.classList.remove("shadow", "sticky-menu");
        }
    });
});
