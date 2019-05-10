<div class="contact__wrapper">

    <div class="product-info__lists-wrapper">
        @foreach ($_mock->contact->info_lists as $info_list)
        @if ($loop->first)
        <div class="product-info__list">
                <a href="/" class="product-info__link">{{$info_list->title}}</a>
                <hr>
            </div>
        @else
        <div class="product-info__list">
                <a class="product-info__link">{{$info_list->title}}</a>
                <hr>
            </div>
        @endif
        @endforeach
    </div>

    <div class="contact-info__wrapper">

        <div class="contact-info__title">Контакты</div>
        <hr class="line">

        <div class="contact-info__items">
            @foreach ($_mock->contact->contacts as $contact)
            <div class="contact-info__item">

                    <div class="contact__title">{{$contact->title}}</div>
        
                    <div class="contact__item">
                        @if ($loop->first)
                            @include('widgets/phones')
                        @elseif ($loop->last)
                        <div class="contact-other">
                            @include('widgets/social_button')
                        </div>
                        @else
                           @include('widgets/adress')
                        @endif
                    </div>
        
                </div>
            @endforeach
        </div>
    </div>

    <div class="contact-feedback__section">
        <div class="contact-feedback__wrapper">
            @include('widgets/feedback', [
                'title' => 'Обратная связь',
                'button' => 'Отправить отзыв'
            ])
        </div>

        <div class="contact-map__wrapper">
                <div class="contact-map__tabs">
                    @foreach ($_mock->contact->map_tabs as $tab)
                    <div class="contact-map__tab">
                        <button data-wstabs-button="{{$tab->data}}" data-wstabs-ns="group-a" data-info="{{$tab->info}}" data-lat="{{$tab->lat}}" data-lng="{{$tab->lng}}" class="button button--gray jsContactButton">
                            <span class="button__text button__text--bold fz16">{{$tab->title}}</span>
                        </button>
                    </div>
                    @endforeach
                </div>
                <div class="contact-maps">
                    <div class="contact-map">
                        <div id="map"></div>
                    </div>
                </div>
        </div>
        

    </div>

</div>

