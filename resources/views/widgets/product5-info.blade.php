<div class="product__wrapper">
    <div class="product-content__wrapper">
            <div class="product__img--big">
            <img src="img/{{$_mock->cards->products[4]->img_big}}" alt="big">
            </div>


            <div class="product-info__wrapper">
        
                <div class="product-info__lists-wrapper">
                    @foreach ($_mock->cards->products[4]->info_lists as $info_list)
                        <div class="product-info__list">
                            <div class="product-info__link">{{$info_list}}</div>
                            <hr>
                        </div>
                    @endforeach
                </div>
        
            <div class="product-info__title">{{$_mock->cards->products[4]->title}}</div>

            <div class="product__img--small">
                <img src="img/{{$_mock->cards->products[4]->img_big}}" alt="big">
            </div>
        
            <div class="product-info-reting__wrapper">
        
                    <div class="product-tegs">
                            @foreach ($_mock->cards->products[4]->tegs as $teg)
                            <img src="img/{{$teg}}" alt="tegs">
                            @endforeach
                        </div>
                
                    <div class="product-info__stars">
                            @foreach ($_mock->cards->products[4]->stars as $star)
                            <svg class="stars__icon">
                                    <use xlink:href="sprite.svg#sprite-star-{{$star}}"></use>
                                </svg>
                            @endforeach
                    </div>
                
                    <div class="product-info__feedback">{{$_mock->cards->products[4]->feedback}}</div>
        
            </div>
            
            <div class="product-info-property__wrapper">
        
                    <div class="product-info__property">
                            @foreach ($_mock->cards->products[4]->info as $info_item)
                            <div class="property__item">
                                <svg class="property__icon">
                                    <use xlink:href="sprite.svg#sprite-{{$info_item->icon}}"></use>
                                </svg>
                                {{$info_item->title}}
                            </div>
                            <hr>
                            @endforeach
                        </div>
        
                    <div class="product-model">
                        <div class="product-model__img">
                                <img src="img/{{$_mock->cards->products[4]->model}}.png" alt="model">
                        </div>
                        <a href="#" class="product_cards-all__link">
                                <div class="link__text">Другие модели Hankook</div>
                                <svg class="link__icon">
                                    <use xlink:href="sprite.svg#sprite-right-arrow"></use>
                                </svg>
                            </a>
        
                    </div>
                
                
            </div>
        
            <div class="product-rectangle-service__wrapper">
        
                <div class="product-rectangle__wrapper">
                    <div class="rectangle__title">Выберите размер</div>
                    <div class="rectangle__select">
                        <div class="select">
                            <option selected value="1">205/55/r16 h</option>
                        </div>
                    </div>
        
                    <div class="flex__wrapper items--ct">
        
                            <div class="product-info-quantity">В наличии: 24 шт.</div>
        
                            <div class="product-quantity__wrapper">
                                <div class="product-quantity__title">Выберите кол-во:</div>
                                <div class="product-quantity__select">
                                    <div class="select">
                                        <option selected value="1">4</option>
                                    </div>
                                </div>
                            </div>
        
                    </div>
        
                    <div class="product-tools__wrapper">
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
                <div class="product-price__wrapper">
                <div class="product-info-prices">
                        <div class="product-price">{{$_mock->cards->products[4]->price}} грн.</div>
                        @if ($_mock->cards->products[4]->old_price !== '')
                        <div class="product-discount">{{$_mock->cards->products[4]->old_price}} грн.</div>
                        @endif
                    </div>
                </div>
                        <button class="button product-buy">
                                <svg class="product-buy__icon">
                                        <use xlink:href="sprite.svg#sprite-basket"></use>
                                    </svg>
                            купить товар</button>
                </div>
        
                <div class="product-service__wrapper">
        
                    @foreach ($_mock->cards->products[4]->service as $services)
        
                    <div class="product-service">
                            <svg class="product-service__icon">
                                    <use xlink:href="sprite.svg#sprite-{{$services->icon}}"></use>
                                </svg>
                            <span class="product-service__title">
                                {{$services->row1}}
                                <br>
                                {{$services->row2}}
                            </span>
                    </div>
                        
                    @endforeach
                </div>
        
            </div>
        
            <div class="product-specifications">
                
                <div class="product-specifications__title">Характеристики</div>
        
                <div class="product-specifications__items">
        
                    @foreach ($_mock->cards->products[4]->specifications as $specification)
                    <div class="product-specifications__item">
        
                        <div class="product-specifications__item-title">{{$specification->title}}</div>
        
                        <div class="product-specifications__item-character">{{$specification->character}}</div>
        
                    </div>
                    @endforeach
                </div>
        
            </div>
        
        
        
            </div>
    </div>

    <div class="product-detail__wrapper">

        <div class="product-detail-nav__tabs">

            @foreach ($_mock->cards->products[4]->detail_tabs as $tab)
                
        <span class="product-detail-nav__tab {{$tab->active}}" data-wstabs-ns="group-t" data-wstabs-button="{{$tab->data}}">
                   {{$tab->title}} 
        </span>

            @endforeach

        </div>

        <div data-wstabs-ns="group-t" data-wstabs-block="1" class="product-detail-description my-block is-active">
            <div class="product-detail-description__text">

                    Если вы также планируете приобрести шины для своего автомобиля, вам следует определиться с несколькими наиболее важными параметрами покрышек. И первый из них – это компания-производитель. Современный рынок автопродукции предлагает сегодня резину более чем 40 изготовителей – здесь и Nokian, и Michelin, и Continental, и множество других марок. И поэтому перед  тем, как сделать выбор в пользу того или иного бренда, вам стоит узнать отзывы бывалых автовладельцев.

            </div>

            <div class="product-detail-description__wrapper">
                <div class="product-detail-description__img">
                    <img src="img/description.jpg" alt="detail">
                </div>
                <div class="product-detail-description__text-wrapper">
                <div class="product-detail-description__text">Следующий ключевой момент – это сезонность покрышек. Если вам кажется, что опираться тут следует только на наступившее время года, вы сильно заблуждаетесь. Сложности возникают и здесь. К примеру, с тем, стоит ли приобретать резину в Херсоне, которая рассчитана на круглогодичное использование, то есть, демисезонные покрышки. Или же отдать предпочтение отдельно зимним и летним шинам.
                    </div>
                <div class="product-detail-description__text">Что касается типоразмера, то здесь никаких вариантов не должно быть. Ориентируйтесь только на характеристики собственного транспортного средства, и ни на что другое. Если у вас возникли какие-либо сомнения при приобретении шины, проконсультируйтесь со специалистами. Помните о том, что от качества и надежности купленной вами резины зависит самое главное – ваша безопасность на дороге. Не рискуйте своим здоровьем и жизнью, и приобретайте только высококачественные покрышки в Херсоне, которые предлагает вам наш интернет-магазин.
                </div>
                </div>
            </div>
        </div>

        <div data-wstabs-ns="group-t" data-wstabs-block="2" class="product-offers__wrapper my-block">
            <div class="product-offers__table">
                <div class="product-offers__column-titles">
                    <div class="product-offers__column-title">Наименование</div>
                    <div class="product-offers__column-title">Размер</div>
                    <div class="product-offers__column-title">Индекс</div>
                    <div class="product-offers__column-title">Количество</div>
                    <div class="product-offers__column-title">Цена</div>
                    <div class="product-offers__column-title"></div>
                </div>

                @foreach ($_mock->cards->products as $product)
                    
                
                <div class="product-offer">
                    <div class="product-offer__row product-offer__row-title">{{$product->title}}</div>
                    <div class="product-offer__row product-offer__row-size">{{$product->size}}</div>
                    <div class="product-offer__row product-offer__row-index">{{$product->index}}</div>
                    <div class="product-offer__row product-offer__row-quantity"><input type="number" class="box" max="24" min="1" value="{{$product->quantity}}">шт.</div>
                    <div class="product-offer__row product-offer__row-price"><span class="price">{{$product->price}}</span>грн.</div>
                    <div class="product-offer__row product-offer__row-button">

                        <button class="button product-buy">
                            <svg class="product-buy__icon">
                                    <use xlink:href="sprite.svg#sprite-basket"></use>
                                </svg>
                        купить товар</button>

                    </div>

                </div>
                @endforeach

            </div>
        </div>

        <div data-wstabs-ns="group-t" data-wstabs-block="3" class="product-feedback__wrapper my-block">

            <div class="product-feedback">
            <div class="product-feedback__items">

                @foreach ($_mock->feedback->feedbacks as $feedback)
                    
                
                <div class="product-feedback__item">

                    <div class="product-feedback__title">
                    <div class="product-feedback-user-name">{{$feedback->user_name}}</div>
                            <div class="product-feedback-date">{{$feedback->date}}</div>
                    </div>
                    <div class="product-feedback-reting">
                        <div class="product-feedback-stars">
                            @foreach ($feedback->stars as $star)
                            <svg class="stars__icon">
                                    <use xlink:href="sprite.svg#sprite-star-{{$star}}"></use>
                                </svg>
                            @endforeach
                        </div>
                        <div class="product-feedback-grade">Оценка {{$feedback->grade}}</div>
                    </div>
                    <div class="product-feedback__text">
                        {{$feedback->text}}
                    </div>

                </div>
                @endforeach

            </div>

            <div class="product-feedback__form-wrapper">
                <form action="#" class="product-feedback__form">
                    <div class="product-feedback__form-title">Оставить отзыв</div>
                    <div class="product-feedback-info-user__wrapper">
                        <div class="field__wrap">
                            <label>Ваше имя
                                <input type="text" name="text" required data-rule-minlength="1" data-msg="Это поле необходимо заполнить." data-msg-minlength="Пожалуйста, введите не меньше {0} символов." class="product-feedback__input">
                            </label>
                        </div>
                        <div class="field__wrap">
                            <label>Ваше Email
                                <input type="email" name='email' required data-msg="Это поле необходимо заполнить." data-msg-email="Пожалуйста, введите корректный адрес электронной почты." class="product-feedback__input">
                            </label>
                        </div>
                        <div class="product-feedback-grade__wrap">
                            <div class="product-feedback-grade__title">Оценка товара</div>
                            <div class="product-feedback-stars">
                                {{-- @foreach ($_mock->feedback->feedbacks[0]->stars as $star)
                                <svg class="stars__icon">
                                        <use xlink:href="sprite.svg#sprite-star-{{$star}}"></use>
                                    </svg>
                                @endforeach --}}
                                <span class="lol">
                                    @for ($i = 1; $i < 6; $i++)
                                        <svg class="stars__icon">
                                            <use xlink:href="sprite.svg#sprite-star-{{$star}}"></use>
                                        </svg>
                                    @endfor
                                <span class="star-rating star-5">
                                        <input type="radio" name="rating" value="1">
                                        <span>
                                            <svg class="stars__icon">
                                                <use xlink:href="sprite.svg#sprite-star-{{$star}}"></use>
                                            </svg>
                                        </span>
                                        <input type="radio" name="rating" value="2">
                                        <span>
                                            @for ($i = 1; $i < 3; $i++)
                                                <svg class="stars__icon">
                                                    <use xlink:href="sprite.svg#sprite-star-{{$star}}"></use>
                                                </svg>
                                            @endfor
                                        </span>
                                        
                                        <input type="radio" name="rating" value="3">
                                        <span>
                                            @for ($i = 1; $i < 4; $i++)
                                                <svg class="stars__icon">
                                                    <use xlink:href="sprite.svg#sprite-star-{{$star}}"></use>
                                                </svg>
                                            @endfor
                                        </span>
                                        <input type="radio" name="rating" value="4">
                                        <span>
                                            @for ($i = 1; $i < 5; $i++)
                                                <svg class="stars__icon">
                                                    <use xlink:href="sprite.svg#sprite-star-{{$star}}"></use>
                                                </svg>
                                            @endfor
                                        </span>
                                        <input type="radio" name="rating" value="5">
                                        <span>
                                            @for ($i = 1; $i < 6; $i++)
                                                <svg class="stars__icon">
                                                    <use xlink:href="sprite.svg#sprite-star-{{$star}}"></use>
                                                </svg>
                                            @endfor
                                        </span>
                                      </span>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="product-feedback__text-input-wrapper">
                        <label>Ваш отзыв
                            <textarea class="product-feedback__textarea"></textarea>
                        </label>
                    </div>

                    <div class="product-feedback__button">
                        <button type="submit" class="button">Написать отзыв</button>
                    </div>

                </form>
            </div>
        </div>

        </div>

        <div data-wstabs-ns="group-t" data-wstabs-block="4" class="product-warranty__wrapper my-block">
            <div class="product-warranty__items">

                @foreach ($_mock->cards->products[4]->warrantys as $warranty)
                <div class="product-warranty__item">
                        <svg class="checked__icon">
                                <use xlink:href="sprite.svg#sprite-checked"></use>
                            </svg>
                        <div class="product-warranty__text">{{$warranty}}</div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="product-cards__wrapper">

            <div class="product-cards__title-wrap">
            <div class="product-cards__title">Похожие товары</div>
                <a href="#" class="product_cards-all__link">
                    <div class="link__text">Ссылка в каталог</div>
                    <svg class="link__icon">
                        <use xlink:href="sprite.svg#sprite-right-arrow"></use>
                    </svg>
                </a>
            </div>
        
            <div class="product-cards__items">
                @foreach ($_mock->cards->products as $product)
                @if ($product == $_mock->cards->products[0])
                    @include('widgets/product-card', [
                        'mark' => 'Fosser',
                        'active' => 'wrap'
                    ])
                @else 
                @endif
                
                @if ($product == $_mock->cards->products[1])
                    @include('widgets/product-card', [
                        'mark' => 'Fosser',
                        'active' => 'wrap'
                    ])
                @else
                @endif
        
                @if ($product == $_mock->cards->products[2])
                    @include('widgets/product-card', [
                        'mark' => 'Fosser',
                        'active' => 'wrap'
                    ])
                @else
                @endif
        
                @if ($product == $_mock->cards->products[3])
                    @include('widgets/product-card', [
                        'mark' => 'Fosser',
                        'active' => 'wrap'
                    ])
                @else
                @endif
        
                @endforeach
            </div>
        
        </div>
    @include('widgets/footer')

</div>