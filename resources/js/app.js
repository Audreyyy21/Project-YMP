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

/**
 * Fungsionalitas untuk tombol panah pada horizontal scroller di halaman program.
 * Kode ini hanya akan berjalan jika elemen-elemennya ada di halaman.
 */
document.addEventListener('DOMContentLoaded', function() {
    const scroller = document.getElementById('program-scroller');
    const scrollLeftBtn = document.getElementById('scroll-left-btn');
    const scrollRightBtn = document.getElementById('scroll-right-btn');

    // Cek apakah semua elemen yang dibutuhkan ada di halaman ini
    if (scroller && scrollLeftBtn && scrollRightBtn) {
        scrollLeftBtn.addEventListener('click', (e) => {
            e.preventDefault();
            // Geser ke kiri sejauh 250px dengan animasi smooth
            scroller.scrollBy({ left: -250, behavior: 'smooth' });
        });

        scrollRightBtn.addEventListener('click', (e) => {
            e.preventDefault();
            // Geser ke kanan sejauh 250px dengan animasi smooth
            scroller.scrollBy({ left: 250, behavior: 'smooth' });
        });
    }
});
