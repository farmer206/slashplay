<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="img/icons/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <title>Play</title>
</head>

<body>
    <div id='preload' class="preloader">
        <div class="preloader__ring"></div>
        <span class="preloader__text">loading...</span>
    </div>
    <div class="wrapper">
        <header class="header lock-padding">
            <div class="header__container container">
                <a href="index.php" class="header__logo"><span>/</span>Play</a>
                <div class="header__menu menu">
                    <div class="menu__icon">
                        <span></span>
                    </div>
                    <nav class="menu__body menu">
                        <ul class="menu__list">
                            <li><a href="index.php" class="menu__link">Home</a></li>
                            <li><a href="logout.php" class="menu__link">Выйти</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <section class="page__account account">
            <div class="account__container container">
                <div class="account__header header-block">
                    <h2 class="heder-block__titile">Мой аккаунт</h2>
                    <div class="heder-block__sub-titile">
                    </div>
                </div>
                <div class="account__body">

                </div>
            </div>
        </section>
        <?php
        require('components/footer.php');
        ?>