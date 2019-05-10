<div class="section section--top">
    <div class="section__container">
        <div class="section__row">
            @include('widgets/menu-category', [
                'add_links' => 'add-links'
            ])
            <div class="search__wrapper">
                @include('widgets/search')
                @include('widgets/filter')
            </div>
        </div>
    </div>
