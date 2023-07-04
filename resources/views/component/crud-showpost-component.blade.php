
<div class="row post-content">
    <div class="col-12 col-md-7">
         <img src="{{ $post['image'] }}" class="card-img-top" alt="...">
    </div>
    <div class="col-12 col-md-5 d-flex align-content-between flex-wrap py-3">      
        <div>
            <h5 class="card-title fw-bold ">{{ $post['title'] }}</h5>
            <div class="text-left py-5">
                <p class="lh-lg">{{ $post['content'] }}</p>
            </div>
        </div>
            
            <div class="text-right">
                <p class="w-100 text-right">Last updated {{ date('d F Y', strtotime($post['updated_at']));  }} by <strong> {{$post['author_name']}} </strong></p> 
            </div>    
            <div class="py-2">
                <a href="{{ route('posts.getUpdate', ['id' => $post['id']]) }}" >editar</a>
            </div>     
       
</div>
</div>
