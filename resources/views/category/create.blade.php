@extends('layouts.app')

@section('content')

<form class="form purple round row p-5" action="/category" method="post">

  @csrf
    <div class="form-group col">
      <input class='form-control' type="text" name="name" placeholder="Category name">
    </div>



    <div class="form-group col-lg-3 coll-12">
      <input class='btn btn-block rev' type="submit" value="Create category">
    </div>

</form>

@endsection
