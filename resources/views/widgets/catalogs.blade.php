<div class="catalog__wrapper">

    <div class="product-info__lists-wrapper">
            @foreach ($_mock->catalog->info_lists as $info_list)
                <a href="{{$info_list->links}}" class="product-info__list">
                    <div class="product-info__link">{{$info_list->title}}</div>
                    <hr>
                </a>
            @endforeach
        </div>

    <div class="catalog__title-wrapper">

        <div class="catalog__title">Автомобильные шины</div>

        <div class="catalog-sorting__wrapper">
                <div class="catalog-sorting__title">Сортировать</div>
                <div class="catalog-sorting__select">
                    <select class="select" name="" id="">
                        <option value="">по стоимости</option>
                    </select>
                </div>
        </div>
    </div>

    <div class="catalog-cards__wrapper">

        <div class="catalog-cards__items">
                @foreach ($_mock->cards->products as $product)
                @include('widgets/product-card')
                @endforeach
            </div>

        <div class="catalog-page__links">
                <div class="catalog-page__item">
                    <img src="img/arrow-left.png" alt="arrow-left">
                </div>
                @for ($i = 1; $i < $_mock->catalog->page + 1; $i++)
                    @if ($i == 2)
                    <div class="catalog-page__item active"><a href="http://">{{$i}}</a></div>
                    @else 
                    <div class="catalog-page__item"><a href="http://">{{$i}}</a></div>
                    @endif
                @endfor
                <div class="catalog-page__item">
                    <img src="img/arrow-right.png" alt="arrow-right">
                </div>
        </div>
    </div>

</div>