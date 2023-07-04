@extends('layout.main-layout')
@section('title', 'Home')
@section('content')

<div>    
    @include('component.category-nav-filter-component')
</div>
@if ($posts ?? '')
<div>
    @include('component.crud-post-component')
</div>
   
@else
    @include('component.crud-showpost-component')
@endif



@endsection