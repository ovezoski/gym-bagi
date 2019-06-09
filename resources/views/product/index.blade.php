@extends('layouts.app')

@section('content')

@foreach($products as $product)

  <div class="">
    {{$product->name}}
    <img src="{{'/storage/productphotos/'.$product->photo}}" alt="">
  </div>

@endforeach

@endsection
