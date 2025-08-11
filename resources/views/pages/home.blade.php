@extends('layouts.main')

@section('title', 'Anasayfa')

@section('content')

    @include('components.home.post-area')
    @include('components.home.post-gallery-area')
    @include('components.home.feature-area')
    @include('components.home.trending-news-area')
    @include('components.home.all-post-area')

@endsection