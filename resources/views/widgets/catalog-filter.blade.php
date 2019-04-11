<div class="filter-product__wrapper">
    <div class="filter-product">

        <div class="filter-product__title">Фильтр товаров</div>
        
        <div class="filter-product-price__wrapper">
            <div class="filter-product-price">

                <div class="filter-product-price__title">Цена</div>

                <div class="filter-product-price__input-wrapper">
                    <span>от</span>
                    <input type="number" class="input price_input">
                    <span>до</span>
                    <input type="number" class="input price_input">
                    <span>грн</span>
                </div>

                <div class="filter-product-price-ranger">
                    <span class="line"></span>
                    <span class="line2"></span>
                        <input type="text" class="filter-range" name="my_range" >
                    
                </div>
                

            </div>

        </div>

        <div class="filter-category__wrapper">

            @foreach ($_mock->filter_category->filter_categorys as $filter_category)
                
            <div class="filter-category">

                    <div class="filter-category__title">{{$filter_category->title}}</div>

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

            @endforeach
            </div>



    </div>
</div>