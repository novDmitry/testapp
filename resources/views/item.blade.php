@extends('layouts/app')

@section('title', 'Item')

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
        
    @include('widgets/product5-info')
@endsection