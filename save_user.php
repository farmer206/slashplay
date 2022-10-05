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

//если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
if (empty($email) or empty($password)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
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
$result = mysqli_query($db, "SELECT `id` FROM `users` WHERE `email` = '$email'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
    exit("Извините, введённый вами e-mail уже зарегистрирован. Введите другой.");
}
// если такого нет, то сохраняем данные
$result2 = mysqli_query($db, "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')");

// Проверяем, есть ли ошибки
if ($result2) {
    echo "Вы успешно зареганы";
} else {
    echo "Ошибка! Вы не зарегистрированы";
}
