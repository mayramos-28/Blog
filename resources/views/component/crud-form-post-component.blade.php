<?php
$post ??= null;
?>
<form action="{{ route($route, ['id'=> $post->id ?? ''])}}" method="POST" enctype="multipart/form-data" class="fs-5">
    @csrf
   <legend class="py-2">{{$title}}</legend>
   
  
   @foreach ($form as $input )
       @if ($input['type']  == 'text')
            <div class="form-group">
        <label for="title">{{$input['label']}}</label>
        <input type="text" class="form-control" id="title" name="{{$input['field']}}" value="{{$post?->{$input['field']} ?? ''}}" required>
    </div>
       @endif

       @if($input['type']  == 'textarea')
         <div class="form-group">
          <label for="content">{{$input['label']}}</label>
          <textarea class="form-control" id="content" name="{{$input['field']}}"  rows="5" required>
            {{$post?->{$input['field']} ?? ''}}
        </textarea>
       @endif

       @if ($input['type'] == 'select')
         <div class="form-group">
          <label for="category">{{$input['label']}}</label>
          <select class="form-control" id="category" name="{{$input['field']}}" required>
                <option  >Selecciona una categoría</option>
                @foreach($categories as $category)
                 <option value="{{ $category->id }}" {{($category->id === $post?->{$input['field']} ?? '') ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
          </select>
       @endif
   @endforeach
    <button type="submit" class="btn btn-primary form-control fs-4 my-2">{{$button}}</button>
</form>
