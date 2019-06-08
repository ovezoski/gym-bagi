@extends('layouts.app')

@section('content')
<form class="" action="/product" method="post">
@csrf
<input type="text" name="name" value="">
<input type="submit" value="Create">
</form>


@endsection
