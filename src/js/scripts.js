import {scrollToAnchor} from "./functions.js";

document.addEventListener("DOMContentLoaded", () => {
    scrollToAnchor();

    document.querySelector('.menu-trigger').addEventListener("click", toggleMenu);

    function toggleMenu() {
        document.querySelector('.burger').classList.toggle("open");
        document.querySelector('.site-header').classList.toggle("nav-active");

        if (document.body.style.overflow === 'hidden') {
            document.body.style.overflow = 'auto';
        } else {
            document.body.style.overflow = 'hidden';
        }
    }

});