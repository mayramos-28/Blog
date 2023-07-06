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

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#success-alert').alert('close');
            }, 5000); // Ocultar después de 5 segundos (5000 milisegundos)
        });
    </script>


    @if ($posts ?? '')
        <div>
            @include('component.crud-post-component')
        </div>
    @else
        @include('component.crud-showpost-component')
    @endif
@endsection
