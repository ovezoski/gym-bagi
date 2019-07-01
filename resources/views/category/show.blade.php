@extends('layouts.app')

@section('content')
<h1 class="form purple round text-center">
{{$category->name}}
</h1>


<div class="form row round">


    @foreach($category->products as $product)

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
