const nav = document.getElementById('header');
const home = document.getElementById('home');

document.addEventListener('scroll', () => {
    if (home.offsetTop <= window.pageYOffset) {
        nav.classList.remove('nav__invisible');
        nav.classList.add('nav__visible');
    }
    else if (window.pageYOffset > nav.clientHeight) nav.classList.add('nav__invisible');
    else {
        nav.classList.remove('nav__invisible');
        nav.classList.remove('nav__visible');
    };
});