<?php
// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!
session_start();

// заносим введенный пользователем e-mail в переменную $email, если она пустая, то уничтожаем переменную
if (isset($_POST['email'])) {
    $login = $_POST['login'];
    if ($login == '') {
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

//если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
// if (empty($email) or empty($password)) {
//     exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
// }

// если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
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

//извлекаем из базы все данные о пользователе с введенным логином и  паролем
$check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
$result_2 = mysqli_fetch_array($check_user);
if (empty($myrow['password'])) {
    //если пользователя с введенным логином не существует
    exit("Извините, введённый вами login или пароль неверный.");
} else {
    //если существует, то сверяем пароли
    if ($result_2['password'] == $password) {
        //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
        $_SESSION['email'] = $result_2['email'];
        //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
        $_SESSION['id'] = $result_2['id'];
        header('Location: /pages/pageAccount.php');
    } else {
        //если пароли не сошлись
        exit("Извините, введённый вами e-mail или пароль неверный.");
    }
}
