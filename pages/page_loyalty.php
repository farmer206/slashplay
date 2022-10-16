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
                    <div class="menu__icon">
                        <span></span>
                    </div>
                    <nav class="menu__body menu">
                        <ul class="menu__list">
                            <li><a href="/index.php" class="menu__link">Home</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <section class="page__loyalty loyalty">
            <div class="loyalty__container container">
                <div class="loyalty__header header-block">
                    <h2 class="heder-block__titile">Прайс лист</h2>
                    <div class="heder-block__sub-titile">
                    </div>
                </div>
                <div class="loyalty__body">
                    <div class="loyalty__column">
                        <div class="loyalty__item item-loyalty">
                            <table class="loyalty-table">
                                <thead>
                                    <tr>
                                        <th class="loyalty-table__cell loyalty-table__title-standart loyalty-table__cell-active">standart zone</th>
                                        <th class="loyalty-table__cell loyalty-table__title loyalty-table__cell-active">будни</th>
                                        <th class="loyalty-table__cell loyalty-table__title loyalty-table__cell-active">выходные</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Базовый тариф (1 час)</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">60&#8381;</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">80&#8381;</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">"Сотка" 3 часа (с 9:00 по 13:00)</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">100&#8381;</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">150&#8381;</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Абонемент 3 часа</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">150&#8381;</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">200&#8381;</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Абонемент 5 часов</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">250&#8381;</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">350&#8381;</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Абонемент 10 часов</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">500&#8381;</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">650&#8381;</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Ночной</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">300&#8381;</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">400&#8381;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="loyalty__column">
                        <div class="loyalty__item item-loyalty">
                            <table class="loyalty-table">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="loyalty-table__cell loyalty-table__title loyalty-table__cell-active">VIP zone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Базовый тариф (1 час)</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">150&#8381;</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">"3 сотки" 3 часа (с 9:00 по 13:00)</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">300&#8381;</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Дневной VIP 3 часа</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">400&#8381;</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Ночной VIP</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">600&#8381;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        require('../components/simple_footer.php');
        ?>