<div class="header-wrap">
<div class="header-line__back header-line__back--gray">
    <div class="header-wrapper">
        <button id="header-nav__open" class="hamburger hamburger--collapse header-nav__button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
        </button>

        <div id="header-nav">
            <ul class="header-nav__items header-nav">
                <li class="header-nav__items">
                @foreach ($_mock->menu->menu_items as $menu_item)
                @if ($menu_item == $_mock->menu->menu_items[1])
                <a href="{{$menu_item->link}}" class="header-nav__item header-nav active">{{$menu_item->title}}</a>
                @else
                <a href="{{$menu_item->link}}" class="header-nav__item header-nav">{{$menu_item->title}}</a>
                @endif
                @endforeach
                </li>
                <li>
                    <a href="#mm-3" class="menu-category__title">Блок Ссылок</a>
                    <ul id="mm-3">
                    @foreach ($_mock->footer->footer_items as $footer_item)
                    @if ($footer_item == $_mock->footer->footer_items[0])
                    <div class="footer__item">
                    <div class="title">Блок {{$footer_item->title}}</div>
                    </div>
                    @else
                    <div class="footer__item">
                    <div class="title">Блок {{$footer_item->title}}</div>
                    @foreach ($footer_item->link as $links)
                    <a href="" class="footer__link">Ccылка {{$links}}</a>
                    @endforeach
                    </div>
                    @endif       
                    @endforeach
                    </ul>
                </li>
                <li> 
                    <a href="#mm-2" class="menu-category__title">Menu</a>
                    <div id="mm-2" class="menu-category__links">
                        <ul class="menu-category__links">
                            @foreach ($_mock->menu->menu_category_items as $menu_category_item)
                        <li class="menu-category__link">{{$menu_category_item}}
                        <svg class="arrow__svg">
                            <use xlink:href="sprite.svg#sprite-arrow"></use>
                        </svg>
                        </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                
                <div class=" mmenu_ctm">
                        <button type="button" data-mfp-src="#popup-callback" class="button popup-open header-callback__button--orange">
                                <svg class="header-callback header-callback__icon">
                                    <use xlink:href="sprite.svg#sprite-call"></use>
                                </svg>
                                <div class="button__title mmenu_ctm">перезвони мне</div>
                        </button>
                        </div>

                <div class="footer-social__links">
                        @foreach ($_mock->footer->footer_icons as $icon)
                        <div class="footer-social__link">
                            <svg class="footer-social__icon">
                                    <use xlink:href="sprite.svg#sprite-{{$icon}}"></use>
                                </svg>
                        </div>
                        @endforeach 
                    </div>

            </ul>
        </div>
        <div class="header__nav--dt">
            <ul class="header-nav__items header-nav">
                @foreach ($_mock->menu->menu_items as $menu_item)
                @if ($menu_item == $_mock->menu->menu_items[1])
                <a href="{{$menu_item->link}}" class="header-nav__item header-nav active">{{$menu_item->title}}</a>
                @else
                <a href="{{$menu_item->link}}" class="header-nav__item header-nav">{{$menu_item->title}}</a>
                @endif
                @endforeach
            </ul>
        </div>

        <button data-mfp-src="#popup-wrapper" class="header-popup popup-open header-popup__button button">
            <svg class="header-popup header-popup__icon">
                <use xlink:href="sprite.svg#sprite-login"></use>
            </svg>
            <div class="button__title">вход</div>
        </button>
        @include('widgets/popup-enter')
    </div>
    <div class="second-header-wrapper">
        <div class="header__logo">
            <svg>
                <use xlink:href="sprite.svg#sprite-logo"></use>
            </svg>
        </div>
        <div class="header-callback__wrap">
            <div class="phone-wrap">
                <a class="telphons" href="tel:+">+380 98 170 00 740</a>
                <a class="telphons" href="tel:+">+380 98 170 00 740</a>
            </div>
            <button data-mfp-src="#popup-callback" type="button" class="button popup-open header-callback__button--orange">
                <svg class="header-callback header-callback__icon">
                    <use xlink:href="sprite.svg#sprite-call"></use>
                </svg>
                <div class="button__title">перезвони мне</div>
            </button>
        </div>
        <div class="header__options">
            <div class="header__option">
                <svg class="header__option header__option-icon">
                    <use xlink:href="sprite.svg#sprite-compare"></use>
                </svg>
                <div class="header__option-title">сравнение</div>
            </div>
            <div class="header__option">
                <svg class="header__option header__option-icon">
                    <use xlink:href="sprite.svg#sprite-favourite"></use>
                </svg>
                <div class="header__option-title">избранное</div>
            </div>
            <div data-mfp-src="#popup-basket" class=" popup-open header__option">
                <svg class="header__option header__option-icon">
                    <use xlink:href="sprite.svg#sprite-cart"></use>
                </svg>
                <div class="header__option-title ">корзина</div>
            </div>
            @include('widgets/popup-basket')
        </div>
    </div>
</div>
</div>

