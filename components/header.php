<?php
session_start();
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
        <span class="preloader__text">Loading...</span>
    </div>
    <div class="wrapper">
        <header class="header lock-padding">
            <div class="header__container container">
                <a href='index.php' class="header__logo"><span>/</span>Play</a>
                <div class="header__menu menu">
                    <nav class="menu__body">
                        <ul class="menu__list">
                            <li class="menu__item"><a data-goto=".price" href="#" class="menu__link">Price</a></li>
                            <li class="menu__item"><a data-goto=".photo" href="#" class="menu__link">Photo</a></li>
                            <li class="menu__item"><a data-goto=".stats" href="#" class="menu__link">Stats</a></li>
                            <li class="menu__item"><a data-goto=".rules" href="#" class="menu__link">Rules</a></li>
                            <li class="menu__item"><a data-goto=".location" href="#" class="menu__link">Contacts</a></li>
                        </ul>
                    </nav>
                    <div class="header__button">
                        <?php
                        if (!isset($_SESSION['id'])) {
                            echo '<a href="/pages/page_login.php" class="button button-login"><span></span></a>';
                        } else {
                            echo '<a href="/pages/page_profile.php" class="button button-profile"><span></span></a>';
                        }
                        ?>
                        <a href="#" class="icon-menu">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>