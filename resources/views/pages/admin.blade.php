
@extends('layout.base-layout')

@section('body')

<div class="row px-2 d-flex align-items-center align-self-sm-start justify-content-center h-100 header-footer-color ">
    <h1 class="my-2 text-center  col-12 col-sm-12 col-md-3 ">The Blog</h1>
    @include('component.login-component')
</div>

@endsection