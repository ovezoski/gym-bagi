@extends('layouts.app')

@section('content')

<form class="form round purple p-5 " action="/product" method="post" enctype="multipart/form-data">

      <h1 class='text-center mb-5 db'> Create a product</h1>

    @csrf
<div class="row">

    <div class="form-group col-12 col-md-6">
      <input class='form-control' type="text" name="name" placeholder="Product name">
    </div>

    <div class="form-group col-12 col-md-6">
      <input class='form-control' type="text" name="price" placeholder="Price">
    </div>
  </div>
    <br>

    <div class="form-group">
    <textarea class='form-control' name="description" rows="8" cols="80" placeholder="Product description here."> </textarea>
  </div>

    <br>


    <div class="row">

      <div class="col">
        <input class='file-upload btn' placeholder="Product photo" type="file" name="photo">
      </div>

      <div class="col">
        <select class='form-control' class="" name="category_id">

          <option value="" disabled selected>Select product category</option>

          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach

        </select>
      </div>

    </div>
    <br>


    <input type="submit" class='btn btn-block rev' value="Create">

</form>


@endsection
