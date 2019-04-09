<div class="footer__wrapper">
    <div class="footer__section">
        <div class="footer__row-items">
            @foreach ($_mock->footer->footer_items as $footer_item)
            @if ($footer_item == $_mock->footer->footer_items[0])
            <div class="footer__item">
            <div class="title">Блок {{$footer_item->title}}</div>
                    <hr class="line">
                    <div class="footer-subscribe__wrap">
                        <h2 class="footer-subscribe__title">Будьте в курсе новостей и новинок!</h2>
                        <h1 class="footer-subscribe__title">Подписывайтесь на рассылку</h1>
                        <div class="footer-subscribe__input-wrap">
                            <form action="" id="footer-subscribe" class="footer-subscribe__input-wrap">
                                <input type="email" name="email" data-msg="Это поле необходимо заполнить." data-msg-email="Пожалуйста, введите корректный адрес электронной почты." required class="footer-subscribe__input" placeholder="Укажите свой email для подписки">
                                <button data-mfp-src="#subscribe" class="button popup-open__sub footer-subscribe__button"><div class="subscribe__text">Подписаться</div> 
                                        <svg class="subscribe__icon">
                                                <use xlink:href="sprite.svg#sprite-rss"></use>
                                            </svg>
                                </button>
                            </form>    
                        </div>
                    </div>
                </div>
            @else
            <div class="footer__item dt">
                    <div class="title">Блок {{$footer_item->title}}</div>
                    <hr class="line">
                    @foreach ($footer_item->link as $links)
                    <a href="" class="footer__link">Ccылка {{$links}}</a>
                    @endforeach
            </div>
            @endif       
            @endforeach
        </div>
        <hr class="footer_line">
        <div class="footer__row-items--2">

            <div class="footer__logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="copyrith__text">© Copyrith 2017. Тестовое задание Wezom</div>
            <div class="footer-social__links">
                @foreach ($_mock->footer->footer_icons as $icon)
                <div class="footer-social__link dtf">
                    <svg class="footer-social__icon">
                            <use xlink:href="sprite.svg#sprite-{{$icon}}"></use>
                        </svg>
                </div>
                @endforeach 
            </div>
            <div class="dev__items dtf">
            <div class="dev__img">
                <img src="img/wezom-logo.png" alt="">
            </div>
            <div class="dev">
                <div class="text">Разработка тестового</div>
                <div class="title">Wezom Agency</div>
            </div>
            </div>
        </div>
    </div>
</div>