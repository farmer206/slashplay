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
        <section class="page__login-account login-account">
            <div class="login-account__container container">
                <div class="login-account__header header-block">
                    <h2 class="heder-block__titile">Войти в аккаунт</h2>
                    <div class="heder-block__sub-titile">
                    </div>
                </div>
                <div class="login-account__body">
                    <div class="login-account__content">
                        <form action="testreg.php" method="post" id="form" class="form-block__body">
                            <div class="form-block__item">
                                <label for="formEmail" class="form-block__label">Email</label>
                                <input pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9 -]+\.[a-z]{2,4}" title="must be a valid email address" id="formEmail" type="email" name="email" class="form-block__input" require />
                            </div>
                            <div class="form-block__item">
                                <label for="formPass" class="form-block__label">Пароль</label>
                                <input title="Must be at least 8 characters" pattern="[a-zA-Z0-9]{8,}" minlength="8" maxlength="32" id="formPass" type="password" name="password" class="form-block__input" require />
                                <p class="input-hint">Must be at 8 characters</p>
                            </div>
                            <div class="form-block__item">
                                <div class="checkbox">
                                    <input id="formRemember" type="checkbox" name="agreement" class="checkbox__input" checked require />
                                    <label for="formRemember" class="checkbox__label">
                                        <span>Запомнить пароль на этом устройстве?</span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="form-block__button">Sign in</button>
                        </form>
                        <div class="login-account__text">
                            <a href="/reg.php">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        require('components/footer.php');
        ?>