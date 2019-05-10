<div class="filter__wrapper-select">
        <div class="filter-options__links">
            @foreach ($_mock->filter_options->filter_title as $filter_titles)
                @if ($filter_titles == $_mock->filter_options->filter_title[0])
                <button class="filter-options__link button is-active" data-wstabs-ns="group-a" data-wstabs-button="{{$filter_titles->data}}">
                        <svg class="filter-options__svg">
                        <use xlink:href="sprite.svg#sprite-{{$filter_titles->svg}}"></use>
                        </svg>
                    <div class="filter-options__text">{{$filter_titles->title}}</div>
                </button>
                @else
                <button class="filter-options__link button" data-wstabs-ns="group-a" data-wstabs-button="{{$filter_titles->data}}">
                        <svg class="filter-options__svg">
                        <use xlink:href="sprite.svg#sprite-{{$filter_titles->svg}}"></use>
                        </svg>
                    <div class="filter-options__text">{{$filter_titles->title}}</div>
                </button>
                @endif
            @endforeach
        </div>
        @foreach ($_mock->filter_options->filter_form as $filter_forms)
            @if ($filter_forms == $_mock->filter_options->filter_form[0])
            <div data-wstabs-ns="group-a" data-wstabs-block="{{$filter_forms->data}}" class="filter-options__form-wrap is-active">
                    <form action="" class="filter-options__form jsFormValid">
                        <div class="switch-tabs__items">
                            @foreach ($filter_forms->tabs as $tab)
                            @if ($tab == $filter_forms->tabs[0])
                            <div class="switch-tabs__item is-active" data-wstabs-ns="group-{{$filter_forms->group}}" data-wstabs-button="{{$tab->data}}">{{$tab->titles}}</div>
                            @else
                            <div class="switch-tabs__item " data-wstabs-ns="group-{{$filter_forms->group}}" data-wstabs-button="{{$tab->data}}">{{$tab->titles}}</div>
                            @endif
                            @endforeach
                        </div>
                        @foreach ($filter_forms->tabs as $tab)
                        @if ($tab == $filter_forms->tabs[0])
                        <div class="selector__items is-active" data-wstabs-ns="group-{{$filter_forms->group}}" data-wstabs-block="{{$tab->data}}">
                                <div class="row">
                                    @foreach ($tab->selector_items as $selector_item)
                                        <div class="selector__item">
                                            <div class="select__wrap">
                                                <select name="state" class="select">
                                                <option value="1">Select {{$selector_item}}</option>
                                                <option value="2">Select 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="prise-filter__items">
                                        <div class="prise-filter__title">Цена</div>
                                        <label class="label" for="">
                                                <input type="number" data-rule-minlength="50" data-msg-minlength="от 50" placeholder="50" class="prise-filter__item">
                                        </label>
                                        <label class="label" for="">
                                                <input type="number" data-rule-maxlength="2500000" data-msg-maxlength="до 250000" placeholder="250000" class="prise-filter__item">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        @else
                        <div class="selector__items" data-wstabs-ns="group-{{$filter_forms->group}}" data-wstabs-block="{{$tab->data}}">
                                <div class="row">
                                    @foreach ($tab->selector_items as $selector_item)
                                        <div class="selector__item">
                                            <div class="select__wrap">
                                                <select name="state" class="select">
                                                <option value="1">Select {{$selector_item}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="prise-filter__items">
                                        <div class="prise-filter__title">Цена</div>
                                        <label class="label" for="">
                                                <input type="number" placeholder="50" data-msg-minlength="от 50" min="50" class="prise-filter__item">
                                        </label>
                                        <label class="label" for="">
                                                <input type="number" placeholder="250000" max="250" class="prise-filter__item">
                                        </label>
                                    </div>
                                </div>
                            </div> 
                        @endif
                        @endforeach
                        <div class="filter-options__buttons">
                            <div class="filter-options__button">
                                <button type="button" class="button button--reset">
                                    <svg class="cross__icon">
                                        <use xlink:href="sprite.svg#sprite-cross"></use>
                                    </svg>
                                    <span class="button__text button__text--bold">Очистить фильтр</span></button>
                            </div>
                            <div class="filter-options__button">
                                <button class="button button--submit">
                                    <span class="button__text button__text--bold">Применить фильтр</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            @else
            <div data-wstabs-ns="group-a" data-wstabs-block="{{$filter_forms->data}}" class="filter-options__form-wrap">
                    <form action="" class="filter-options__form jsFormValid">
                        <div class="switch-tabs__items">
                            @foreach ($filter_forms->tabs as $tab)
                            @if ($tab == $filter_forms->tabs[0])
                            <div class="switch-tabs__item is-active" data-wstabs-ns="group-{{$filter_forms->group}}" data-wstabs-button="1">{{$tab->titles}}</div>
                            @else
                            <div class="switch-tabs__item " data-wstabs-ns="group-{{$filter_forms->group}}" data-wstabs-button="{{$tab->data}}">{{$tab->titles}}</div>
                            @endif
                            @endforeach
                        </div>
                        @foreach ($filter_forms->tabs as $tab)
                        @if ($tab == $filter_forms->tabs[0])
                        <div class="selector__items is-active" data-wstabs-ns="group-{{$filter_forms->group}}" data-wstabs-block="{{$tab->data}}">
                                <div class="row">
                                    @foreach ($tab->selector_items as $selector_item)
                                        <div class="selector__item">
                                            <div class="select__wrap">
                                                <select name="state" class="select">
                                                <option value="">Select {{$selector_item}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="prise-filter__items">
                                        <div class="prise-filter__">Цена</div>
                                        <label class="label" for="">
                                                <input type="number" min="50" class="prise-filter__item">
                                        </label>
                                        <label class="label" for="">
                                                <input type="number" max="250000" class="prise-filter__item">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        @else
                        <div class="selector__items" data-wstabs-ns="group-{{$filter_forms->group}}" data-wstabs-block="{{$tab->data}}">
                                <div class="row">
                                    @foreach ($tab->selector_items as $selector_item)
                                        <div class="selector__item">
                                            <div class="select__wrap">
                                                <select name="state" class="select">
                                                <option value="">Select {{$selector_item}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="prise-filter__items">
                                        <div class="prise-filter__title">Цена</div>
                                        <label class="label" for="">
                                                <input type="number" min="50" class="prise-filter__item">
                                        </label>
                                        <label class="label" for="">
                                                <input type="number" max="250" class="prise-filter__item">
                                        </label>
                                    </div>
                                </div>
                            </div> 
                        @endif
                        @endforeach
                        <div class="filter-options__buttons">
                                <div class="filter-options__button">
                                        <button type="button" class="button button--reset">
                                            <svg class="cross__icon">
                                                <use xlink:href="sprite.svg#sprite-cross"></use>
                                            </svg>
                                            <span class="button__text button__text--bold">Очистить фильтр</span></button>
                                    </div>
                                    <div class="filter-options__button">
                                        <button class="button button--submit">
                                            <span class="button__text button__text--bold">Применить фильтр</span></button>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            @endif
        @endforeach
    </div>