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
                                        <th class="loyalty-table__cell loyalty-table__title loyalty-table__cell-active">Standart zone</th>
                                        <th class="loyalty-table__cell loyalty-table__title loyalty-table__cell-active">будни</th>
                                        <th class="loyalty-table__cell loyalty-table__title loyalty-table__cell-active">выходные</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Базовый тариф</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">60руб/час</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">80руб/час</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">"Сотка" 3 часа (с 9:00 по 13:00)</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">100руб</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">150руб</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Абонемент 3 часа</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">150руб</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">200руб</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Абонемент 5 часов</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">250руб</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">350руб</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Абонемент 10 часов</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">500руб</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">650руб</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Ночной</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">300руб</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">400руб</td>
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
                                        <td class="loyalty-table__cell loyalty-table__info">Базовый тариф</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">150руб/час</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">"3 сотки" 3 часа (с 9:00 по 13:00)</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">300руб</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Дневной VIP 3 часа</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">400руб</td>
                                    </tr>
                                    <tr>
                                        <td class="loyalty-table__cell loyalty-table__info">Ночной VIP</td>
                                        <td class="loyalty-table__cell loyalty-table__cell-active">600руб</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        require('components/footer.php');
        ?>