<form action="" class="product-feedback__form jsFormValid">
<div class="product-feedback__form-title">{{$title}}</div>
    <div class="product-feedback-info-user__wrapper">
        <div class="field__wrap">
            <label>Ваше имя
                <input type="text" name="text" data-rule-minlength="1" data-msg="Это поле необходимо заполнить." data-msg-minlength="Пожалуйста, введите не меньше {0} символов." required class="product-feedback__input">
            </label>
        </div>
        <div class="field__wrap">
            <label>Ваше Email
                <input type="email" name='email' data-msg="Это поле необходимо заполнить." data-msg-email="Пожалуйста, введите корректный адрес электронной почты." required class="product-feedback__input">
            </label>
        </div>
        <div class="product-feedback-grade__wrap">
            <div class="product-feedback-grade__title">Оценка товара</div>
            <div class="product-feedback-stars">
                <span class="stars__wrapper">
                    @for ($i = 1; $i < 6; $i++)
                        <svg class="stars__icon">
                            <use xlink:href="sprite.svg#sprite-star-gold"></use>
                        </svg>
                    @endfor
                <span class="star-rating star-5">
                        <input type="radio" name="rating" value="1">
                        <span>
                            <svg class="stars__icon">
                                <use xlink:href="sprite.svg#sprite-star-gold"></use>
                            </svg>
                        </span>
                        <input type="radio" name="rating" value="2">
                        <span>
                            @for ($i = 1; $i < 3; $i++)
                                <svg class="stars__icon">
                                    <use xlink:href="sprite.svg#sprite-star-gold"></use>
                                </svg>
                            @endfor
                        </span>
                        
                        <input type="radio" name="rating" value="3">
                        <span>
                            @for ($i = 1; $i < 4; $i++)
                                <svg class="stars__icon">
                                    <use xlink:href="sprite.svg#sprite-star-gold"></use>
                                </svg>
                            @endfor
                        </span>
                        <input type="radio" name="rating" value="4">
                        <span>
                            @for ($i = 1; $i < 5; $i++)
                                <svg class="stars__icon">
                                    <use xlink:href="sprite.svg#sprite-star-gold"></use>
                                </svg>
                            @endfor
                        </span>
                        <input type="radio" name="rating" value="5">
                        <span>
                            @for ($i = 1; $i < 6; $i++)
                                <svg class="stars__icon">
                                    <use xlink:href="sprite.svg#sprite-star-gold"></use>
                                </svg>
                            @endfor
                        </span>
                        </span>
                    </span>
            </div>
        </div>
    </div>

    <div class="product-feedback__text-input-wrapper">
        <label>Ваш отзыв
            <textarea class="product-feedback__textarea"></textarea>
        </label>
    </div>

    <div class="product-feedback__button">
    <button type="submit" class="button">{{$button}}</button>
    </div>

</form>