@extends('layouts.app')

@section('content')

<form class="purple form round p-5" action="/product/{{$product->id}}" method="post">

  <h1 class='text-center'> Edit your product </h1>
<hr color="white" class='mb-5'>
  @csrf
  @method('PATCH')

  <div class="row">

    <div class="form-group col">
      <input class="form-control" type="text" name="name" value="{{$product->name}}">
    </div>
    <div class="form-group col">
      <input class="form-control" type="text" name="price" value="{{$product->price}}">
    </div>

    <div class="form-group col">
      <select class="form-control col" name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}" {{$category->id == $product->category_id? 'selected':'' }}>{{$category->name}}</option>
        @endforeach
      </select>
    </div>

  </div>

  <div class="form-group">
    <textarea class="form-control" name="description" rows="8" cols="80">{{$product->description}}</textarea>
  </div>


  <div class="row justify-content-center">

    <div class="col-8 col-lg-3">
      <input class='btn btn-block rev' type="submit" value="Update">
    </div>

  </div>
</form>

@endsection
