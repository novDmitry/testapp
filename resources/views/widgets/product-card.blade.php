<div class="product-cards__item">
            
    <div class="marks">
    <div class="mark">Fosser</div>
    </div>   
    <div class="title">{{$product->title}}</div>
    <div class="product-reting">
        <div class="product__stars">
            @for ($i = 1; $i < 6; $i++)
            @if ($i < $product->stars + 1)
            <svg class="stars__icon star-active">
                    <use xlink:href="sprite.svg#sprite-star-gold"></use>
                </svg>
            @else
            <svg class="stars__icon ">
                    <use xlink:href="sprite.svg#sprite-star-gold"></use>
                </svg>
            @endif
            @endfor
        </div>
        <div class="product__feedback">{{$product->feedback}}</div>
        <div class="product-quantity">В наличии: 24 шт.</div>
    </div>

    <div class="info-preview">
        <div class="product__property">
            @foreach ($product->info as $info_item)
            <div class="property__item">
                <svg class="property__icon">
                    <use xlink:href="sprite.svg#sprite-{{$info_item->icon}}"></use>
                </svg>
                {{$info_item->title}}
            </div>
            @endforeach
        </div>
        <div class="preview__img">
            <img src="img/{{$product->img}}" alt="prev">
        </div>
    </div>

    <div class="product__tegs">
        @foreach ($product->tegs as $teg)
        <img src="img/{{$teg}}" alt="tegs"> 
        @endforeach
    </div>
    <div class="product-prices">
        <div class="product-price">{{$product->prices[0]->price}} грн.</div>
        @if ($product->prices[0]->old_price !== '')
        <div class="product-discount">{{$product->prices[0]->old_price}} грн.</div>
        @endif
    </div>

    <div class="product-buy__wrapper">
    <div class="wrap">
    <div class="box__wrap"><input type="number" value="4" class="box">шт.</div></div>
    
        <button class="button product-buy">
                <svg class="product-buy__icon">
                        <use xlink:href="sprite.svg#sprite-basket"></use>
                    </svg>
            купить товар</button>
        
    </div>
    
    <div class="product-tools">
        <span class="product-tool">
            <svg class="product-tool__icon">
                <use xlink:href="sprite.svg#sprite-compare2"></use>
            </svg>
            <a href="#" class="product-tool__link">Сравнить товар</a>
        </span>
        <span class="product-tool">
            <svg class="product-tool__icon">
                <use xlink:href="sprite.svg#sprite-favourite2"></use>
            </svg>
            <a href="#" class="product-tool__link">В избранное</a>
        </span>
    </div>
</div>