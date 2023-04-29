// block what is this?
var menu = document.getElementById('menu');
var nav = document.getElementById('nav');
var exit = document.getElementById('exit');
menu.addEventListener('click', function (e) {
    nav.classList.toggle('hide-mobile');
    e.preventDefault();
});
exit.addEventListener('click', function (e) {
    nav.classList.add('hide-mobile');
    e.preventDefault();
});

// block MENU HAMBURGER
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
});