<div class="row post-content w-100">
    <div class="col-12 col-md-7">
        <img src="{{ $post['image'] }}" class="card-img-top" alt="...">
    </div>
    <div class="col-12 col-md-5 d-flex align-content-between flex-wrap py-3 ">
        <div>
            <h5 class="card-title fw-bold fs-4">{{ $post['title'] }}</h5>
            <div class="text-left py-5">
                <p class="lh-lg fs-5">{{ $post['content'] }}</p>
            </div>
        </div>
        <div class="w-100 d-flex flex-column d-flex align-items-end">
            <div class="text-right">
                <p class="w-100 text-right">Creado el {{ date('d F Y', strtotime($post['crated_at'])) }} por <strong>
                        {{ $post['author_name'] }} </strong></p>
            </div>
            {{-- <div class="text-right">
                    <p class="w-100 text-right">Última actualización {{ date('d F Y', strtotime($post['updated_at']));  }} por <strong> {{$author}} </strong></p> 
                </div>   --}}
            @auth
                <div class="py-2">
                    <a href="{{ route('posts.getUpdate', ['id' => $post['id']]) }}" class="fs-3">editar</a>
                </div>

            @endauth

        </div>


    </div>
</div>
