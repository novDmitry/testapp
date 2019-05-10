@extends('layouts/app')

@section('title', 'Catalog')

@section('content')
    @include('widgets/header')
    <div class="section section--top">
        <div class="section__container">
            <div class="section__row">
            @include('widgets/menu-category', [
                'add_links' => ''
            ])
            <div class="search__wrapper"> 
                @include('widgets/search')
            </div>
        </div>
    
        <div class="section__row">
            @include('widgets/catalog-filter')
            @include('widgets/catalogs')
        </div>
    </div>
        </div>
    @include('widgets/footer')
@endsection