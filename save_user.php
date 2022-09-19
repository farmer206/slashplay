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

$email = stripslashes($email);
$password = stripslashes($password);

// Преобразование символов в сущности
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);

//Удаление пробельных символов с обеих сторон
$email = trim($email);
$password = trim($password);

$password = md5($password);
// подключаемся к базе

// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
include("bd.php");

// проверка на существование пользователя с таким же e-mail
$check_user_email = mysqli_query($db, "SELECT `id` FROM `users` WHERE `email` = '$email'");
$result = mysqli_fetch_array($check_user_email);
if (!empty($result['id'])) {
    exit("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
// если такого нет, то сохраняем данные
$save_result = mysqli_query($db, "INSERT INTO `users` (`email`, `password`) VALUES ('$email','$password')");
// Проверяем, есть ли ошибки
if ($save_result == 'TRUE') {
    header('Location: /pages/pageAccount.php');
} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
}
