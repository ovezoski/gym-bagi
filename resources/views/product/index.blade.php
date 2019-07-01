@extends('layouts.app')

@section('content')

<div class="form purple round row">
  @foreach($categories as $category)

  <div class="col-lg-1 col-6 ">

    <a  href="/category/{{$category->id}}">
        <div class="rev btn btn-block">
          {{$category->name}}
        </div>
    </a>

  </div>

  @endforeach
</div>

<div class="form lb row round">


    @foreach($products as $product)

    <div class="col-12 col-md-4">
      <a href="/product/{{$product->id}}">
      <div class="product mb round">

          <img class='photo' src="{{$product->photo}}" alt="">

          <div class="name">
            {{$product->name}}
          </div>

          <div class="price round">
            15$
          </div>

      </div>
    </a>
  </div>

@endforeach

</div>

@endsection
