<?php
$post ?? null;
?>    

<form action="{{ route($route, ['id'=> $post->id ?? ''])}}" method="POST" enctype="multipart/form-data" class="fs-5 ">

    @if (session('message'))
        <div class="alert text-danger text-center fs-4 show py-2" role="alert" id="danger-alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif

    @csrf
   <legend class="py-2 letter-color">{{$title}}</legend>
   
  
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
                <option disabled >Selecciona una categoría</option>
                @foreach($categories as $category)
                 <option value="{{ $category->id }}" {{($category->id === $post?->{$input['field']} ?? '') ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
          </select>
       @endif
   @endforeach
   <div class="background rounded my-2 ">
    <button type="submit" class="btn form-control fs-4">{{$button}}</button>
   </div>
    
</form>
