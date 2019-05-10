<div class="filter-product__wrapper">
    <div class="filter-product">

        <div class="filter-product__title" id="filter-open">Фильтр товаров
                <svg class="filter__svg">
                        <use xlink:href="sprite.svg#sprite-filter"></use>
                    </svg>
        </div>
        
        <form name="catalogFilterForm" class="filter__wrapper">
            <div class="filter-product-price__wrapper">
                        <div class="filter-product-price">
            
                            <div class="filter-product-price__title">Цена</div>
            
                            <div class="filter-product-price__input-wrapper">
                                <span>от</span>
                                <input type="text" class="input price_input jsPrice jsMinPrice" min="100" value="100" id="jsMinPrice">
                                <span>до</span>
                                <input type="text" class="input price_input jsPrice jsMaxPrice" min="100" value="100 000" id="jsMaxPrice">
                                <span>грн</span>
                            </div>
            
                            <div class="filter-product-price-ranger">
                                <span class="line"></span>
                                <span class="line2"></span>
                                    <input type="text" data-max="100000" data-min="100" data-step="1" class="filter-range" name="my_range" >
                                
                            </div>
                            
                        </div>
            
                    </div>
            
            <div class="filter-category__wrapper">
            
                        @foreach ($_mock->filter_category->filter_categorys as $filter_category)
                        @if ($filter_category == $_mock->filter_category->filter_categorys[0])
                        <div class="filter-category">
            
                                <div class="filter-category__title jsSubFilterOpen">{{$filter_category->title}}
                                    <svg class="sub-filter__svg jsSvgFilterAnim">
                                        <use xlink:href="sprite.svg#sprite-arrow-filter"></use>
                                    </svg>
                                </div>
            
                                <div class="filter-category__items ">
            
                                    @foreach ($filter_category->items as $item)
                                    <div class="filter-category__item">
                                            <label id="filter-category" class="filter-category__label">
                                                <input type="checkbox" checked name="checkbox" id="filter-category" class="filter-category__checkbox">
                                                <label for="filter-category" class="filter-category__cheackbox--cst"></label>
                                                <div class="filter-category__label-text">{{$item}}</div>
                                            </label>
                                        </div>
                                    @endforeach
                                    <a href="#" class="filter-category__item--all">Показать все производители</a>
                                </div>
            
                            </div>
                        @else
                        
                        <div class="filter-category">
            
                                <div class="filter-category__title jsSubFilterOpen">{{$filter_category->title}}
                                    <svg class="sub-filter__svg jsSvgFilterAnim">
                                        <use xlink:href="sprite.svg#sprite-arrow-filter"></use>
                                    </svg></div>
            
                                <div class="filter-category__items">
            
                                    @foreach ($filter_category->items as $item)
                                    <div class="filter-category__item">
                                            <label class="filter-category__label">
                                                <input type="checkbox" name="checkbox" id="filter-category" class="filter-category__checkbox">
                                                <label for="filter-category" class="filter-category__cheackbox--cst"></label>
                                                <div class="filter-category__label-text">{{$item}}</div>
                                            </label>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        @endif
                        @endforeach
            
                        <button type="reset" class="button reset-filter__button resetFilterBtn">
                                <svg class="cross__icon">
                                        <use xlink:href="sprite.svg#sprite-cross"></use>
                                    </svg>
                            Очистить фильтр</button>
            
                        </div>

        </form>


    </div>
</div>