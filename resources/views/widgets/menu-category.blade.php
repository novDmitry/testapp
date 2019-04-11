<div class="menu-category__wrapper dt">
        <div class="menu-category__title-wrap">
            <div class="menu-category__button-wrap hamburger hamburger--collapse" id="menu-category__button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
            </div>
            <div class="menu-category__title 
            ">Меню</div>
        </div>
            <div class="menu-category__links {{$add_links}}">
            <ul class="menu-category__links-list">
            @foreach ($_mock->menu->menu_category_items as $menu_category_item)
            <li class="menu-category__link">{{$menu_category_item}}
            <svg class="arrow__svg">
                <use xlink:href="sprite.svg#sprite-arrow"></use>
            </svg>
            </li>
            @endforeach
            </ul>
        </div>
    </div>