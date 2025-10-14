import './bootstrap';
import "../scss/style.scss";
import "./bootstrap";
import "../scss/style.scss";
import "bootstrap/dist/js/bootstrap.bundle.min.js";


window.addEventListener("scroll", function () {
    const navbar = document.getElementById("mainNavbar");
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
