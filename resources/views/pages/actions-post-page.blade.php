@extends('layout.main-layout')
@section('title', $title)
@section('content')


    <div class="row">
        <div class="col-12 ">
            @include('component.crud-form-post-component')
        </div>
    </div>

    


@endsection
