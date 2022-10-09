<?php
if (empty($_COOKIE['myCookie'])) {
    // Команда установки куки
    setcookie('myCookie', 'myValue', time() + 1800);
} else {
    // Команда считывания куки из запроса
    $_COOKIE['myCookie'];
}
