@extends('admin.layouts.main')

@section('title', 'Admin Panel')


@section('content')

    @include('admin.components.admin.admin-header')
    @include('admin.components.admin.admin-main')

@endsection