import 'bootstrap';

const toggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.nav-links');
const navActions = document.querySelector('.nav-actions');

if (toggle && nav) {
    toggle.addEventListener('click', () => {
        nav.classList.toggle('open');
        navActions?.classList.toggle('open');
    });
}
