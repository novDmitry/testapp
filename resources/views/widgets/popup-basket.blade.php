<div class="popup-wrap zoom-anim-dialog mfp-hide" id="popup-basket">

<div class="popup-basket__wrapper">

    <div class="popup__title">Ваша корзина</div>

    <div class="popup-basket__items">

        @foreach ($_mock->basket->basket as $item)
        <div class="popup-basket__item">
                <div class="popup-basket__icon--del"></div>
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
                <input type="number" class="popup-basket__count" max="24" min="1" placeholder="{{$item->count}} шт.">
                        <div class="popup-basket__icon popup-basket__icon--pls up"></div>
                </div>
                <div class="popup-basket-price"><span class="popup-basket-price__change">{{$item->price}}</span> грн.</div>
            </div>
        @endforeach

    </div>

    <div class="popup-basket-chekout__wrapper">

        <a class="continue__link" href="http://">Продолжить покупки</a>

        <div class="popup-basket-price__wrapper">
                <div class="popup-basket-price__title">Общая сумма заказа:</div>
                <div class="popup-basket-price"><span id="popup-basket-price--all">998 </span> грн.</div>
        </div>

        <div class="popup-basket-buy">
                <button class="button product-buy">
                    оформить заказ</button>
        </div>

    </div>

</div>

</div>