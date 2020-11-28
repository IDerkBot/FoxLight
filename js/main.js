var auth = document.querySelector("#enter");
var ovForm = document.querySelector("#overlay");
var close = document.querySelector("#popup-close");

auth.addEventListener('click', event => {
    ovForm.classList.remove("none");
});
close.addEventListener('click', event => {
    ovForm.classList.add("none");
});