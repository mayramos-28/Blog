

<ul class="nav nav-tabs category-container" >
    @foreach($categories as $category)
    <li class="nav-item d-flex align-justify-end">
        <a class="fs-4 close scale-up" href="{{ route('posts.index', ['category_id' =>$category->id]) }}">{{$category['name']}}</a><br/>
    </li>
    @endforeach  
   
  </ul>