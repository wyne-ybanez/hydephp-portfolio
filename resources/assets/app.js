/*
* This is the main JavaScript used by webpack to build the app.js file.
*/
import AOS from "aos";
import "aos/dist/aos.css";


if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
    document.getElementById('meta-color-scheme').setAttribute('content', 'dark');
} else {
    document.documentElement.classList.remove('dark')
}

document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        duration: 1000,
        once: true,
    });

    const navbar = document.querySelector('#main-navigation');

    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-md', 'scrolled');
        } else {
            navbar.classList.remove('shadow-md', 'scrolled');
        }
    }

    window.addEventListener('scroll', handleScroll);
});

window.addEventListener('load', function () {
    AOS.refresh();
});