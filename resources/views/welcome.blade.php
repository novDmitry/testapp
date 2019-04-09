@extends('layouts/app')

@section('title', 'Test')

@section('content')

@include('widgets/header')
@include('widgets/top-section')
@include('widgets/product-cards', [
    'title' => 'Карточки товаров'
])
@include('widgets/footer')

@endsection
