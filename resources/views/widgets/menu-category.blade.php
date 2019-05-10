<div class="menu dt">
    <div class="menu__title-wrap">
        <div class="menu__button hamburger hamburger--collapse jsMenuButton">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                </span>
        </div>
        <div class="menu__title">Меню</div>
    </div>
    <div class="menu__links {{$add_links}}">
        <ul class="menu__links-list">
        @foreach ($_mock->menu->menu_category_items as $menu_category_item)
            <li class="menu__link">{{$menu_category_item}}
                <svg class="arrow__svg">
                    <use xlink:href="sprite.svg#sprite-arrow"></use>
                </svg>
            </li>
        @endforeach
        </ul>
    </div>
</div>