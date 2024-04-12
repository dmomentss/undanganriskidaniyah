const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
})

// navbar fix

const header = document.querySelector('header');
const headerHeight = header.clientHeight;

window.addEventListener('scroll', function () {
    const scrollPosition = window.scrollY || window.pageYOffset;

    if (scrollPosition > headerHeight) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
});
