

<ul class="nav nav-tabs">
    @foreach($categories as $category)
    <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.index', ['category_id' =>$category->id]) }}">{{$category['name']}}</a><br/>
    </li>
    @endforeach  
   
  </ul>