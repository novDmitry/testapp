<div class="popup-wrapper mfp-hide" id="popup-wrapper">
    <div class="popup-enter popup-enter__wrapper">
        <div class="title">Вход в личный кабинет</div>
        <form action="#" class="popup-entert__form">
            <div class="field-wrap">
                <label  class="field__title">
                    <span class="text">Ваш email</span> 
                    <input type="email" name="email" data-msg="Это поле необходимо заполнить." data-msg-email="Пожалуйста, введите корректный адрес электронной почты." class="popup-enter__input" required>
                </label>
            </div>
            <div class="field-wrap">
                <label  class="field__title">
                    <span class="text">Пароль</span>
                    <input type="password" name="password" data-rule-minlength="6" data-msg="Это поле необходимо заполнить." data-msg-minlength="Пожалуйста, введите не меньше {0} символов." required class="popup-enter__input" >
                </label>
            </div>
            <div class="checkbox-wrap" id="checkbox-wrap">
                <input type="checkbox" id="checkbox" class="popup-enter__input-checkbox">
                <label for="checkbox"></label>
                <div class="checkbox__title">Запомнить пароль</div>
            </div>
            <div class="switch-popup">
                <button class="switch-popup switch-popup__button">Забыли пароль?</button>
                <button class="switch-popup switch-popup__button">Регистрация</button>
            </div>
            <div class="field-wrap">
                <input type="submit" value="Войти в личный кабинет" class="popup-enter__button button">
            </div>
        </form>
    </div>
    <div class="popup__line--gray"></div>
    <div class="popup-enter popup-enter__social">
        <div class="title">Войти с помощью</div>
        <div class="popup-enter__social-button-items">
            <button class="popup-enter__social-button-item button button--blue">
                <svg style="width: 9px; height: 12px" class="svg-social">
                    <use xlink:href="sprite.svg#sprite-f"></use>
                </svg>
                <span class="text">Facebook</span></button>
            <button class="popup-enter__social-button-item button button--lblue">
                <svg style="width: 17px; height: 14px" class="svg-social">
                    <use xlink:href="sprite.svg#sprite-t"></use>
                </svg>
                <span class="text">Twitter</span></button>
            <button class="popup-enter__social-button-item button button--red">
                    <svg style="width: 16px; height: 16px" class="svg-social">
                            <use xlink:href="sprite.svg#sprite-google"></use>
                        </svg>
                <span class="text">Google</span></button>
        </div>
    </div>
</div>
<div class="popup-wrapper mfp-hide popup-callback__wrap" id="popup-callback">
    <div class="popup-enter popup-enter__wrapper">
        <div class="title">Перезвони мне</div>
        <form action="#" class="popup-entert__form">
            <div class="field-wrap">
                <label class="field__title">
                    <div class="text">Номер телефона</div> 
                    <input type="tel" name="tel" data-rule-minlength="17" data-msg="Это поле необходимо заполнить." data-msg-minlength="Введите номер телефона полностью" required class="popup-enter__input phone__mask">
                </label>
            </div>
            <div class="field-wrap">
                <input type="submit" value="Перезвонить мне" class="popup-enter__button--orange button">
            </div>
            <div class="popup-phone__wrap menu">
                <div class="popup-phone__title">Или</div>
                <a class="telphons" href="tel:+">+380 98 170 00 740</a>
                <a class="telphons" href="tel:+">+380 98 170 00 740</a>
            </div>
        </form>
    </div>
</div>
<div class="popup-subscribe mfp-hide" id="subscribe">
    <div class="popup-subscribe__wrap">
        <div class="title">Вы успешно подписанны на рассылку!</div>
    </div>
</div>