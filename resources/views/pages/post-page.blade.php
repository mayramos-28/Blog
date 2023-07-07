@extends('layout.main-layout')
@section('title', 'Home')
@section('content')

    <div class="">
        @include('component.category-nav-filter-component')
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif


    @if ($posts ?? '')
        <div>
            @include('component.crud-post-component')
        </div>
    @else
        @include('component.crud-showpost-component')
    @endif
@endsection
