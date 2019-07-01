@extends('layouts.app')

@section('content')
<div class="orders purple form round">

  <h1 class='text-center'>Recieved</h1>


  <div class="order row text-center">

    <span class='date col'>
      Date
    </span>

    <span class='name col'>
      Name
    </span>

    <span class='address col'>
      Address
    </span>

    <span class='ordered-product col'>
      Product ordered
    </span>

    <span class='col'>

    </span>

  </div>

  <hr style="background: white; margin-bottom: 50px">

  @foreach($recieved as $order)
  <div class="order row pb-3  text-center">

    <span class='date col'>
      {{$order->created_at}}
    </span>

    <span class='name col'>
      {{ $order->firstname }} {{$order->lastname }}
    </span>

    <span class='address col'>
      {{ $order->address }}
    </span>

    <span class='ordered-product col'>
      {{ $order->product->name }}
    </span>

    <span class='col'>
      <form  action="/order/{{$order->id}}" method="post">

        @method('patch')
        @csrf
        <input value="Sent" class='btn rev btn-block' type="submit">

      </form>
    </span>

  </div>

  @endforeach
</div>

<div class="orders purple form round">

  <h1 class='text-center'>Sent</h1>


  <div class="order row text-center">

    <span class='date col'>
      Date
    </span>

    <span class='name col'>
      Name
    </span>

    <span class='address col'>
      Address
    </span>

    <span class='ordered-product col'>
      Product ordered
    </span>

    <span class='col'>

    </span>

  </div>

  <hr style="background: white; margin-bottom: 50px">

  @foreach($sent as $order)
  <div class="order row pb-3  text-center">

    <span class='date col'>
      {{$order->created_at}}
    </span>

    <span class='name col'>
      {{ $order->firstname }} {{$order->lastname }}
    </span>

    <span class='address col'>
      {{ $order->address }}
    </span>

    <span class='ordered-product col'>
      {{ $order->product->name }}
    </span>

    <span class='col'>
      <form  action="/order/{{$order->id}}" method="post">

        @method('patch')
        @csrf
        <input value="Sent" class='btn rev btn-block' type="submit">

      </form>
    </span>

  </div>

  @endforeach
</div>

<div class="orders purple form round">

  <h1 class='text-center'>Delivered</h1>


  <div class="order row text-center">

    <span class='date col'>
      Date
    </span>

    <span class='name col'>
      Name
    </span>

    <span class='address col'>
      Address
    </span>

    <span class='ordered-product col'>
      Product ordered
    </span>

    <span class='col'>

    </span>

  </div>

  <hr style="background: white; margin-bottom: 50px">

  @foreach($delivered as $order)
  <div class="order row pb-3  text-center">

    <span class='date col'>
      {{$order->created_at}}
    </span>

    <span class='name col'>
      {{ $order->firstname }} {{$order->lastname }}
    </span>

    <span class='address col'>
      {{ $order->address }}
    </span>

    <span class='ordered-product col'>
      {{ $order->product->name }}
    </span>

    <span class='col'>
      <form  action="/order/{{$order->id}}" method="post">

        @method('patch')
        @csrf
        <input value="Sent" class='btn rev btn-block' type="submit">

      </form>
    </span>

  </div>

  @endforeach
</div>


@endsection
