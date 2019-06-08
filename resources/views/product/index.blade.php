@extends('layouts.app')

@section('content')

@foreach($products as $product)

  <div class="">
    {{$product->name}}
  </div>

@endforeach

@endsection
