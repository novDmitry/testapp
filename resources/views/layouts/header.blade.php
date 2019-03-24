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
                @foreach ($_mock->menu->menu_items as $menu_item)
                @if ($menu_item == $_mock->menu->menu_items[1])
                <a href="{{url($_mock->menu->menu_links[0])}}" class="header-nav__item header-nav active">{{$menu_item}}</a>
                @else
                <a href="" class="header-nav__item header-nav">{{$menu_item}}</a>
                @endif
                @endforeach

                <div class="header-callback__wrap mmenu_ctm">
                        <button type="button" class="button header-callback__button--orange">
                                <svg class="header-callback header-callback__icon">
                                    <use xlink:href="sprite.svg#sprite-call"></use>
                                </svg>
                                <div class="button__title">перезвони мне</div>
                            </button>
                        <div class="phone-wrap">
                            <a class="telphons" href="tel:+">+380 98 170 00 740</a>
                            <a class="telphons" href="tel:+">+380 98 170 00 740</a>
                        </div>
                    </div>

            </ul>
        </div>
        <button href="#popup-wrapper" class="header-popup header-popup__button button">
            <svg class="header-popup header-popup__icon">
                <use xlink:href="sprite.svg#sprite-login"></use>
            </svg>
            <div class="button__title">вход</div>
        </button>
        @include('layouts/popup-enter')
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
            <button type="button" class="button header-callback__button--orange">
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
            <div class="header__option">
                <svg class="header__option header__option-icon">
                    <use xlink:href="sprite.svg#sprite-cart"></use>
                </svg>
                <div class="header__option-title">корзина</div>
            </div>
        </div>
    </div>
</div>
</div>

