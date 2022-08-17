<div id="popup" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <a href="#header" class="popup__close close-popup">
                <img src="/img/icons/popup/close.svg" alt="">
            </a>
            <div class="popup__title">Войти в аккаунт</div>
            <form action="#" id="form" class="form-block__body">
                <div class="form-block__item">
                    <label for="formName" class="form-block__label">Имя аккаунта /Play</label>
                    <input id="formName" type="text" name="name" class="form-block__input" require />
                </div>
                <div class="form-block__item">
                    <label for="formPass" class="form-block__label">Пароль</label>
                    <input id="formPass" type="password" name="pass" class="form-block__input" require />
                </div>
                <div class="form-block__item">
                    <div class="checkbox">
                        <input id="formRemember" checked type="checkbox" name="agreement" class="checkbox__input" require />
                        <label for="formRemember" class="checkbox__label">
                            <span>Запомнить пароль на этом устройстве?</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="form-block__button">Sign in</button>
            </form>
            <div class="popup__text">
                <a href="#popup_2" class="popup-link">Зарегистрироваться</a>
            </div>
        </div>
    </div>
</div>

<div id="popup_2" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <a href="#" class="popup__close close-popup">
                <img src="/img/icons/popup/close.svg" alt="">
            </a>
            <div class="popup__title">Создать аккаунт</div>
            <form action="#" id="form" class="form-block__body">
                <div class="form-block__item">
                    <label for="formName" class="form-block__label">Имя аккаунта /Play</label>
                    <input id="formName" type="text" name="name" class="form-block__input" require />
                </div>
                <div class="form-block__item">
                    <label for="formPass" class="form-block__label">Телефон</label>
                    <input id="formTel" type="tel" name="tel" class="form-block__input" require />
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
            <div class="popup__text">
                <a href="#popup" class="popup-link">У меня уже есть аккаунт</a>
            </div>
        </div>
    </div>
</div>

<div id="popup_3" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <a href="#" class="popup__close close-popup">
                <img src="/img/icons/popup/close.svg" alt="">
            </a>
            <div class="popup__title">Забронировать время</div>
        </div>
    </div>
</div>