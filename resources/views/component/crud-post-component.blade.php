<div class="container">

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 py-2 ">
                <div class="card post-container h-100">
                    <img src="{{ $post['image'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold ">{{ $post['title'] }}</h5>
                        <p class="card-text">{{ Str::limit($post['content'], 100) }}</p>
                        <p class="card-text">Última actualización {{ date('d F Y', strtotime($post['updated_at'])) }}
                        </p>
                        <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="card-link close scale-up ">Ver
                            más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center">

    {{ $posts->links() }}

</div>
