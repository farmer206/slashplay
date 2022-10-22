<?php
session_start();

if (isset($_SESSION['id'])) {
    header('Location: /pages/page_profile.php');
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
                        </ul>
                    </nav>
                    <a href="#" class="icon-menu">
                        <span></span>
                    </a>
                </div>
            </div>
        </header>
        <section class="page__login login">
            <div class="login__container container">
                <div class="login__header header-block">
                    <h2 class="header-block__title">Войти в аккаунт</h2>
                    <div class="header-block__sub-title">
                    </div>
                </div>
                <div class="login__body">
                    <div class="login__content">
                        <form action="/validation-form/verify_user.php" method="post" id="form" class="form-block__body">
                            <div class="form-block__item">
                                <label for="formEmail" class="form-block__label">E-mail</label>
                                <input pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9 -]+\.[a-z]{2,4}" title="must be a valid email address" id="formEmail" type="email" name="email" class="form-block__input" value="<?= $_SESSION['email'] ?>" require />
                            </div>
                            <div class="form-block__item">
                                <label for="formPass" class="form-block__label">Пароль</label>
                                <input title="Must be at least 8 characters" pattern="[a-zA-Z0-9]{8,}" minlength="8" maxlength="32" id="formPass" type="password" name="password" class="form-block__input" value="<?= $_SESSION['password'] ?>" require />
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
                            <div class="login__text">
                                <a href="page_register.php">Here you can register</a>
                            </div>

                            <?php
                            if ($_SESSION['message']) {
                                echo '<p class="login__message">' . $_SESSION['message'] . '</p>';
                            }
                            unset($_SESSION['message']);
                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php
        require('../components/simple_footer.php');
        ?>