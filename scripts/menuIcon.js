"use strict";

// Меню бургер
const menuIcon = document.querySelector('.menu__icon');
if (menuIcon) {
    const menuBody = document.querySelector('.menu__body');
    menuIcon.addEventListener("click", function(e) {
        document.body.classList.toggle('_lock');
        menuIcon.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    });
}