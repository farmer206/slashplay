<?php
// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте.
session_start();

// заносим введенный пользователем e-mail в переменную $email, если она пустая, то уничтожаем переменную
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email == '') {
        unset($email);
    }
}

// заносим введенный пользователем пароль в переменную $password, если она пустая, то уничтожаем переменную
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
    }
}

// если пользователь не ввел e-mail или пароль
if (empty($email) or empty($password)) {
    $_SESSION['message'] = 'Не введён e-mail или пароль';
    header('Location: /pages/page_login.php');
    exit;
}

// если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$email = stripslashes($email);
$password = stripslashes($password);

// Преобразование символов в сущности
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);

//Удаление пробельных символов с обеих сторон
$email = trim($email);
$password = trim($password);

// подключаемся к базе
// файл connect.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
include("../database/connect.php");

// извлекаем из базы все данные о пользователе с введенным e-mail и паролем
$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
$myrow = mysqli_fetch_array($result);

if (empty($myrow['password'])) {
    // если пользователя с введенным e-mail не существует
    $_SESSION['message'] = "Извините, введённый вами e-mail или пароль неверный.";
    header('Location: /pages/page_login.php');
} else {
    // если существует, то сверяем пароли
    if (password_verify($password, $myrow['password'])) {
        // если пароли совпадают, то запускаем пользователю сессию! Он вошел!
        $_SESSION['email'] = $myrow['email'];
        // эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
        $_SESSION['id'] = $myrow['id'];
        header('Location: /pages/page_profile.php');
    } else {
        // если пароли не сошлись
        $_SESSION['message'] = "Извините, введённый вами пароль неверный.";
        header('Location: /pages/page_login.php');
    }
}
