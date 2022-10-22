<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: /pages/page_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="/img/icons/favicon.ico">
    <link rel="stylesheet" href="/css/style.css">
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
                <a href="/index.php" class="header__logo"><span>/</span>Play</a>
                <div class="header__menu menu">
                    <nav class="menu__body">
                        <ul class="menu__list">
                            <li><a href="/index.php" class="menu__link">Home</a></li>
                            <li></li>
                        </ul>
                    </nav>
                    <div class="header__button">
                        <a href="/validation-form/logout.php" class="button button-logout"><span></span></a>
                        <a href="#" class="icon-menu">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <section class="page__profile profile">
            <div class="profile__container container">
                <div class="profile__header header-block">
                    <h2 class="header-block__title">Мой профиль</h2>
                    <div class="header-block__sub-title">
                    </div>
                </div>
                <div class="profile__body">

                </div>
            </div>
        </section>
        <?php
        require('../components/simple_footer.php');
        ?>