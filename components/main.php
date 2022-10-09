<main class="page">
    <section class="page__main-block main-block">
        <div class="main-block__container container">
            <div class="main-block__body">
                <h1 class="main-block__title anim-items anim-no-hide">Добро пожаловать!</h1>
                <div class="main-block__text anim-items anim-no-hide">
                    Нажми на кнопку <span>START</span> если хочешь начать игру.
                </div>
                <div class="main-block__buttons anim-items anim-no-hide">
                    <a href="#popup" class="main-block__button main-block__button-start popup-link">START</a>
                    <?php
                    if (!isset($_SESSION['id'])) {
                        echo '<a href="/login.php" class="main-block__button main-block__button-more">Sign in</a>';
                    } else {
                        echo '<a href="/logout.php" class="main-block__button main-block__button-more">Sign out</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- <div class="main-block__image _ibg">
            <img src="img/main/main-block_1.jpg" alt="Сетка в пространстве">
        </div> -->
    </section>