<div class="top-section__wrapper">
    <div class="menu-category__wrapper">
        <div class="menu-category__title-wrap">
            <div class="menu-category__button-wrap"></div>
            <div class="menu-category__title">Меню</div>
        </div>
        <div class="menu-category__links">
            <ul class="menu-category__links">
                @foreach ($_mock->menu->menu_category_items as $menu_category_item)
            <a href=""><li class="menu-category__link">{{$menu_category_item}}</li></a>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="search__wrapper"></div>
    <div class="filter__wrapper"></div>
</div>