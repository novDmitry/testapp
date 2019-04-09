<div class="menu-category__wrapper dt">
        <div class="menu-category__title-wrap">
            <div class="menu-category__button-wrap hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
            </div>
            <div class="menu-category__title 
            ">Меню</div>
        </div>
        <div class="menu-category__links">
            <ul class="menu-category__links">
                @foreach ($_mock->menu->menu_category_items as $menu_category_item)
            <a href=""><li class="menu-category__link">{{$menu_category_item}}
            <svg class="arrow__svg">
                <use xlink:href="sprite.svg#sprite-arrow"></use>
            </svg>
            </li></a>
                @endforeach
            </ul>
        </div>
    </div>