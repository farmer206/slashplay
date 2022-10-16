<?php
session_start();

// заносим введенный пользователем e-mail в переменную $email, если онa пустая, то уничтожаем переменную
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email == '') {
        unset($email);
    }
}

//заносим введенный пользователем пароль в переменную $password, если онa пустая, то уничтожаем переменную
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
    }
}

// если пользователь не ввел e-mail или пароль
if (empty($email) or empty($password)) {
    $_SESSION['message'] = 'Не введён e-mail или пароль';
    header('Location: /pages/page_register.php');
    exit;
}

$email = stripslashes($email);
$password = stripslashes($password);

// Преобразование символов в сущности
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);

//Удаление пробельных символов с обеих сторон
$email = trim($email);
$password = trim($password);

// Хеширование
$hash = password_hash($password, PASSWORD_BCRYPT);

// подключаемся к базе

// файл connect.php должен быть в той же папке, что и все остальные
include("../database/connect.php");

// проверка на существование пользователя с таким же e-mail
$result = mysqli_query($connect, "SELECT `id` FROM `users` WHERE `email` = '$email'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
    $_SESSION['message'] = 'Извините, введённый вами e-mail уже зарегистрирован. Введите другой.';
    header('Location: /pages/page_register.php');
}
// если такого нет, то сохраняем данные
$result2 = mysqli_query($connect, "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$hash')");

// Проверяем, есть ли ошибки
if ($result2) {
    $_SESSION['message'] = "Отлично! Регистрация прошла успешно. Пожалуйста, войдите в аккаунт.";
    header('Location: ../pages/page_login.php');
} else {
    $_SESSION['message'] = "Ошибка! Вы не зарегистрированы";
    header('Location: ../verify_user.php');
}
