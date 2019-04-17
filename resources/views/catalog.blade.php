@extends('layouts/app')

@section('title', 'Catalog')

@section('content')
    @include('widgets/header')

    <div class="top-section__wrapper">
            @include('widgets/menu-category', [
                'add_links' => ''
            ])
            <div class="search__wrapper"> 
                @include('widgets/search')
            </div>
        </div>
    <div class="section__wrapper">
            @include('widgets/catalog-filter')
            @include('widgets/catalogs')
    </div>
    @include('widgets/footer')
@endsection