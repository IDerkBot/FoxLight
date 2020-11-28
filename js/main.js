var auth = document.querySelector("#enter");
var ovForm = document.querySelector("#overlay");
var close = document.querySelector("#popup-close");

auth.addEventListener('click', event => {
    ovForm.classList.remove("none");
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