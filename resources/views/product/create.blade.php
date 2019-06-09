@extends('layouts.app')

@section('content')
<form class="" action="/product" method="post" enctype="multipart/form-data">
@csrf
<input type="text" name="name" value="">
<textarea name="description" rows="8" cols="80"> </textarea>
<input type="file" name="photo" placeholder="Da">
<input type="submit" value="Create">
</form>


@endsection
