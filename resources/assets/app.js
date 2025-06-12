/*
* This is the main JavaScript used by webpack to build the app.js file.
*/

if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
    document.getElementById('meta-color-scheme').setAttribute('content', 'dark');
} else {
    document.documentElement.classList.remove('dark')
}

import AOS from "aos";
import "aos/dist/aos.css";

AOS.init({
    duration: 1000,
    easing: "ease-out-cubic",
    once: true,
});

document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('#main-navigation');

    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-md', 'dark:border-b-[0.8px]', 'dark:border-white');
        } else {
            navbar.classList.remove('shadow-md', 'dark:border-b-[0.8px]', 'dark:border-white');
        }
    }

    window.addEventListener('scroll', handleScroll);
});