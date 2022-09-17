<div id="popup" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <a href="#header" class="popup__close close-popup">
                <img src="/img/popup/close.svg" alt="Закрыть">
            </a>
            <!-- <div class="popup__title">Войти в аккаунт</div> -->
            <form action="#" id="form" class="form-block__body">
                <div class="form-block__item">
                    <label for="formPhone" class="form-block__label">Телефон</label>
                    <input pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}$" placeholder="+7(___)___-__-__" maxlength="12" minlength="12" id="formPhone" type="tel" name="phone" class="form-block__input" require />
                </div>
                <div class="form-block__item">
                    <label for="formPass" class="form-block__label">Пароль</label>
                    <input title="Must be at 8 characters" pattern="[a-zA-Z0-9]{8,}" minlength="8" maxlength="16" id="formPass" type="password" name="pass" class="form-block__input" require />
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
            <div class="popup__text">
                <a href="#popup_2" class="popup-link">Register</a>
            </div>
        </div>
    </div>
</div>

<div id="popup_2" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <a href="#" class="popup__close close-popup">
                <img src="/img/popup/close.svg" alt="Закрыть">
            </a>
            <form action="#" id="form" class="form-block__body">
                <div class="form-block__item">
                    <label for="formTel" class="form-block__label">Телефон</label>
                    <input id="formTel" type="tel" name="tel" class="form-block__input" require />
                </div>
                <div class="form-block__item">
                    <label for="formPass" class="form-block__label">Пароль</label>
                    <input id="formPass" type="password" name="pass" class="form-block__input" require />
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
                <a href="#popup" class="popup-link">Is there already an account?</a>
            </div>
        </div>
    </div>
</div>

<div id="popup_3" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <a href="#" class="popup__close close-popup">
                <img src="/img/popup/close.svg" alt="Закрыть">
            </a>
            <div class="popup__title">Забронировать время</div>
            <div class="popup__tel">
                <a href="tel:9114073668" class="header__tel">+7(911)407-36-68</a>
            </div>
        </div>
    </div>
</div>