<div class="popup-wrap zoom-anim-dialog mfp-hide" id="popup-basket">

<div class="popup-basket__wrapper">

    <div class="popup__title">Ваша корзина</div>

    <div class="popup-basket__items">
        <div class="popup-basket-clear">Корзина пуста :(</div>
            
        @foreach ($_mock->basket->basket as $item)
        <div class="popup-basket__item-wrapper "> 
            <div class="popup-basket__item ">
                    <div class="popup-basket__icon--del jsProductDel"></div>
                    <div class="popup-basket__img--small">
                        <img src="img/{{$item->img}}.png" alt="">
                    </div>
                    <div class="popup-basket__title">
                        <div class="popup-basket__text">
                                {{
                                $item->title}}
                        </div>
                    <div class="popup-basket-price--one">
                        1 шт = <div class="popup-basket-price">{{$item->one_count}} грн.</div>
                    </div>
                    </div>
                    <div class="popup-basket__counter">
                            <div class="popup-basket__icon popup-basket__icon--min down"></div>
                    <input type="text" class="popup-basket__count jsBasketCount" max="24" min="1" value="{{$item->count}} шт.">
                            <div class="popup-basket__icon popup-basket__icon--pls up"></div>
                    </div>
                    <div class="popup-basket-price"><span class="popup-basket-price__change">{{$item->price}}</span> грн.</div>
                </div>
                <div class="popup-basket-delete__accept">
                        <div class="popup-basket-delete__title">Удалить товар?</div>
                        <div class="popup-basket-delete__buttons">
                            <div class="popup-basket-delete__button">
                                <button class="button button--small button--bold button--yes jsDeleteItemYes">
                                    <div class="button__text button__text--bold">ДА</div></button>
                            </div>
                            <div class="popup-basket-delete__button">
                                <button class="button button--small button--bold button--no jsDeleteItemNo">
                                    <div class="button__text button__text--bold">НЕТ</div>
                                </button>
                            </div>
                        </div>
                    </div>
        </div>
        @endforeach

    </div>

    <div class="popup-basket-chekout__wrapper">

        <a class="continue__link jsBasketClose">Продолжить покупки</a>

        <div class="popup-basket-price__wrapper">
                <div class="popup-basket-price__title">Общая сумма заказа:</div>
                <div class="popup-basket-price"><span id="popup-basket-price--all">0 </span> грн.</div>
        </div>

        <div class="popup-basket-buy">
                <button class="button button--orange product-buy">
                    <span class="button__text button__text--bold">оформить заказ</span></button>
        </div>

    </div>

</div>

</div>