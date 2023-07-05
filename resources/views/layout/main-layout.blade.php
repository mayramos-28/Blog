@extends('layout.base-layout')

@section('body')

<div class="d-flex flex-column flex-nowrap h-100">
  <header class="header-footer-color d-flex flex-column align-content-end">
    @auth
       <a class=" d-flex align-self-end justify-content-end p-2  " href="{{ route('logout') }}">Cerrar sesión</a>
    @endauth
     

    <h1 class="bg-stone-100 text-center text-4xl  tracking-wider ">The Blog</h1>
    @include('component.nav-component')
  </header>

  <main class="d-flex flex-grow-1 ">
    <div class="container mx-auto">
      @yield('content')
    </div>
  </main>

  <footer class="header-footer-color">
    @include('component.footer-component')
  </footer>
</div>

@endsection