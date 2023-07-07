<nav class="navbar navbar-expand-lg  ">
    <div class="container-fluid ">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div><span class="navbar-toggler-icon"></span> </div>
        </button>
        <div class="collapse navbar-collapse  w-100" id="navbarNav">
            <ul class="navbar-nav nav-font link-color ">
                <li class="nav-item item-hoover">
                    <a class="nav-link link-color  " aria-current="page" href="{{ route('posts.index') }}">Posts</a>
                </li>
                @auth
                    <li class="nav-item item-hoover">
                        <a class="nav-link link-color " href="{{ route('posts.getCreate') }}">Publicar</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
