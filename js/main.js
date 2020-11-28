var auth = document.querySelector("#enter");
var ovForm = document.querySelector("#overlay");
var close = document.querySelector("#popup-close");

auth.addEventListener('click', event => {
    ovForm.classList.remove("none");
    if(window.screen.width <= 768){
        menu.classList.add("menu-none");
        burger.innerHTML = '<i class="fas fa-bars"></i>';
    }
});
close.addEventListener('click', event => {
    ovForm.classList.add("none");
});

var btnUp = document.querySelector("#btn-up");
function backToTop(){
    if (window.pageYOffset > 0) {
        window.scrollBy(0, -80);
        setTimeout(backToTop, 0);
    }
};
function trackScroll(){
    var scrolled = window.pageYOffset;
    if(scrolled > 10) btnUp.classList.remove('done');
    if(scrolled < 10) btnUp.classList.add('done');
};

btnUp.addEventListener('click', backToTop);
window.addEventListener('scroll', trackScroll);

var burger = document.querySelector("#burger");
var menu = document.querySelector("ul.menu");

burger.addEventListener('click', e => {
    if(burger.innerHTML == '<i class="fas fa-bars"></i>'){
        menu.classList.remove("menu-none");
        burger.innerHTML = '<i class="fas fa-times"></i>';
    } else if(burger.innerHTML == '<i class="fas fa-times"></i>'){
        menu.classList.add("menu-none");
        burger.innerHTML = '<i class="fas fa-bars"></i>';
    }
});