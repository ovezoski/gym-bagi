@extends('layouts.app')

@section('content')

<h1 class='form purple round text-center'> You successfully ordered a {{ $order->product->name }} with credentials
   {{ $order->firstname }} {{ $order->lastname }}, to be delivered to {{$order->address}}!  </h1>

@endsection
