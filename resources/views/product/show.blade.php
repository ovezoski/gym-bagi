@extends('layouts.app')

@section('content')

<div id="product" class="form lb row">


  <img src="{{$product->photo}}" alt="" class='col-12 col-md-5'>
  <div class="col-12 col-md-7">
    <h1 class='text-center db'>{{$product->name}}</h1>

    <div class="description">
      {{$product->description}}
    </div>

    <div class="price">

      {{$product->price}}MKD
    </div>





    <div class="form purple round p-4" >

      <form class="" action='/order' method="post">
        @csrf

        <div class="row">

          <div class="col-12 col-md-6 form-group">
            <input class="form-control" type="text" name="firstname" placeholder="Firstname">
          </div>

          <div class="col-12  col-md-6 form-group">
            <input class="form-control" type="text" name="lastname" placeholder="Lastname">
          </div>
        </div>
        <div class="row">

          <div class="col form-group">
            <input class="form-control" type="text" name="address" placeholder="Address">
          </div>

          <div class="col form-group">
            <input class="form-control" type="text" name="number" placeholder="Phone number">
          </div>


        </div>
        <input type="hidden" name="product_id" value="{{$product->id}}">

        <div class="row justify-content-center">

          <input type="submit" value='Order' class='btn rev col-7'>
        </div>

      </form>
    </div>

  </div>
</div>

@auth
<div class="purple form row">

  <a href="/product/{{$product->id}}/edit" class='btn  col'>Edit</a>

  <form class='col'  action="/product/{{$product->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" class='btn btn-block' value="Delete">
  </form>


</div>
@endauth

@endsection
