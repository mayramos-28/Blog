@extends('layout.base-layout')

@section('body')
    <div class="d-flex flex-column flex-nowrap h-100">


        <header class="header-footer-color d-flex  justify-content-around">
            <h1 class="text-center letter-color align-self-end py-1 ">El Blog</h1>
            @include('component.nav-component')
            @auth
                <div class="d-flex align-self-start ">
                    <a class="d-flex align-self-end justify-content-end p-2 close scale-up " href="{{ route('logout') }}">Cerrar
                        sesión</a>
                </div>
            @endauth
            @guest
                <div class="d-flex align-self-start ">
                    <a class="d-flex align-self-end justify-content-end p-2 close scale-up "
                        href="{{ route('get-login') }}">Admin</a>
                </div>
            @endguest
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
