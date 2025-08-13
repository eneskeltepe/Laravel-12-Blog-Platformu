@extends('admin.layouts.main')

@section('title', 'Admin Dashboard')

@section('content')

    @include('admin.components.blogList.blog-list-header')

    @include('admin.components.blogList.blog-list-main')

@endsection