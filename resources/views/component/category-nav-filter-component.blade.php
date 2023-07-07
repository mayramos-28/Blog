
@if (isset($categories)) 


<div class="dropdown d-md-none my-2 ">
    <button class="btn btn-secondary background dropdown-toggle" type="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Categorias
    </button>
    <ul class="dropdown-menu p-3">
        @foreach ($categories as $category)
            <li class="nav-item d-flex align-justify-end p-2">
                <a class="fs-4 close scale-up"
                    href="{{ route('posts.index', ['category_id' => $category->id]) }}">{{ $category['name'] }}</a><br />
            </li>
        @endforeach
    </ul>
</div>

<ul class="nav nav-tabs category-container d-none d-md-flex">
    @foreach ($categories as $category)
        <li class="nav-item d-flex align-justify-end">
            <a class="fs-4 close scale-up"
                href="{{ route('posts.index', ['category_id' => $category->id]) }}">{{ $category['name'] }}</a><br />
        </li>
    @endforeach
</ul>

    
@endif