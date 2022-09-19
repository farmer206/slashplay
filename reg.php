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
        <section class="page__reg-account reg-account">
            <div class="reg-account__container container">
                <div class="reg-account__header header-block">
                    <h2 class="heder-block__titile">Регистрация</h2>
                    <div class="heder-block__sub-titile">
                    </div>
                </div>
                <div class="reg-account__body">
                    <div class="reg-account__content">
                        <form action="save_user.php" method="post" id="form" class="form-block__body">
                            <div class="form-block__item">
                                <label for="formEmail" class="form-block__label">Email</label>
                                <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="formEmail" type="email" name="email" class="form-block__input" value="<?= $_SESSION['email'] ?>" require />
                            </div>
                            <div class="form-block__item">
                                <label for="formPass" class="form-block__label">Пароль</label>
                                <input id="formPass" type="password" name="password" class="form-block__input" value="<?= $_SESSION['password'] ?>" require />
                            </div>
                            <div class="form-block__item">
                                <div class="checkbox">
                                    <input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input" require />
                                    <label for="formAgreement" class="checkbox__label">
                                        <span>Я даю свое согласие на обработку персональных данных в соответствии с
                                            <a href="#">Условиями</a></span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="form-block__button">Send</button>
                        </form>
                        <div class="reg-account__text">
                            <a href="/login.php">Is there already an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        require('components/footer.php');
        ?>