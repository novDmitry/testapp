<div class="section section--main">
    <div class="product-cards__wrapper">

    <div class="product-cards__title-wrap">
    <div class="product-cards__title">{{$title}}</div>
        <a href="/catalog" class="product_cards-all__link">
            <div class="link__text">Ссылка в каталог</div>
            <svg class="link__icon">
                <use xlink:href="sprite.svg#sprite-right-arrow"></use>
            </svg>
        </a>
    </div>

    <div class="product-cards__items">
        @foreach ($_mock->cards->products as $product)
        @if ($product == $_mock->cards->products[0] 
          || $product == $_mock->cards->products[1]
          || $product == $_mock->cards->products[2]
          || $product == $_mock->cards->products[3])
            @include('widgets/product-card', [
                'mark' => 'Mark',
                'active' => 'hide'
            ])
        @else 
        @endif
        @endforeach
    </div>

    </div>
</div>
