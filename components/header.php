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
        <span class="preloader__text">loading...</span>
    </div>
    <div class="wrapper">
        <header class="header lock-padding">
            <div class="header__container container">
                <a href='index.php' class="header__logo"><span>/</span>Play</a>
                <div class="header__menu menu">
                    <div class="menu__icon">
                        <span></span>
                    </div>
                    <nav class="menu__body menu">
                        <ul class="menu__list">
                            <li><a data-goto=".price" href="#" class="menu__link">Прайс</a></li>
                            <li><a data-goto=".photo" href="#" class="menu__link">Фото</a></li>
                            <li><a data-goto=".stats" href="#" class="menu__link">Статы</a></li>
                            <li><a data-goto=".rules" href="#" class="menu__link">Правила</a></li>
                            <li><a data-goto=".location" href="#" class="menu__link">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>