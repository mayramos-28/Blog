@extends('layout.main-layout')
@section('title', $title)
@section('content')
 

    <div class="row">
        @if ($count ?? null)
            <div class="col-12 py-2  ">
                <button class="btn-publish ">Ver Post pendientes de publicar {{ $count }}</button>
            </div>
        @endif


        <div class="col-12 col-ms-11 col-md-9">
            @include('component.crud-form-post-component')
        </div>

    </div>


@endsection
