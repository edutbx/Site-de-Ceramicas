var menuBtn = document.querySelector(".hideb");
var menu = document.querySelector(".barra");

menuBtn.addEventListener("click", function() {
    if (menu.style.display === "none") {
        menu.style.display = "flex";
    } else {
        menu.style.display = "none";
    }
});

var menuBtnF = document.querySelector(".fechar");
var menuF = document.querySelector(".barra");

menuBtnF.addEventListener("click", function() {
    if (menuF.style.display === "flex") {
        menuF.style.display = "none";
    } else {
        menuF.style.display = "flex";
    }
});