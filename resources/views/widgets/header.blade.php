<div class="section section--header">
<div class="section__background section__background--top"></div>
    <div class="section__container">
        <div class="header header--top">
            <button class="header-nav--mob hamburger hamburger--collapse" id="header-nav__open">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <div id="header-nav">
                <ul class="header-nav__lists">
                    <li class="header-nav__links">
                        @foreach ($_mock->menu->menu_items as $menu_item)
                            @if ($menu_item == $_mock->menu->menu_items[1])
                            <a href="{{$menu_item->link}}" class="header-nav__link header-nav__link--active">{{$menu_item->title}}</a>
                            @else
                            <a href="{{$menu_item->link}}" class="header-nav__link">{{$menu_item->title}}</a>
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
                            <button type="button" data-mfp-src="#popup-callback" class="button popup-open button--orange">
                                    <svg class="header-callback header-callback__icon">
                                        <use xlink:href="sprite.svg#sprite-call"></use>
                                    </svg>
                                    <div class="button__text button__text--bold">перезвони мне</div>
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

            <div class="header-nav__links">
                @foreach ($_mock->menu->menu_items as $menu_item)
                    @if ($menu_item == $_mock->menu->menu_items[1])
                    <a href="{{$menu_item->link}}" class="header-nav__link header-nav__link--active">{{$menu_item->title}}</a>
                    @else
                    <a href="{{$menu_item->link}}" class="header-nav__link">{{$menu_item->title}}</a>
                    @endif
                @endforeach
            </div>
            
            <div class="header__button">
                <button data-mfp-src="#popup-wrapper" class="button button--orange popup-open">
                <span class="header__button-svg">
                    <svg class="button__svg">
                        <use xlink:href="sprite.svg#sprite-login"></use>
                    </svg>
                </span>
                <span class="header__button-text button__text">вход</span>
            </button>
            </div>
 
            @include('widgets/popup-enter')

        </div>

        <div class="header header--bottom">
 
            <div class="header__logo">
                <svg class="header__logo-svg">
                    <use xlink:href="sprite.svg#sprite-logo"></use>
                </svg>
            </div>

            <div class="header-callback">
                <div class="phone-wrapper">
                    <a class="telphons jsPhons" href="">+380 98 170 00 741</a>
                    <a class="telphons jsPhons" href="">+380 98 170 00 742</a>
                </div>
                <div class="header-callback__button">
                    <button data-mfp-src="#popup-callback" class="button button--orange popup-open">
                        <svg class="header-callback__svg">
                                <use xlink:href="sprite.svg#sprite-call"></use>
                            </svg>
                        <span class="button__text">перезвони мне</span>
                    </button>
                </div>
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

