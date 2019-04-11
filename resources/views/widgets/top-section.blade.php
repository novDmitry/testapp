<div class="top-section__wrapper">
    @include('widgets/menu-category', [
        'add_links' => 'add-links'
    ])
    <div class="search__wrapper">
        @include('widgets/search')
        @include('widgets/filter')
    </div>
</div>
