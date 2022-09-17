"use strict";

// Прокрутка страницы
const upButton = document.querySelector('.up-button');
window.onscroll = function () {
    if (window.pageYOffset > 200) {
        upButton.classList.add('show');
    } else  {
        upButton.classList.remove('show')}
};

upButton.onclick = function () {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
};