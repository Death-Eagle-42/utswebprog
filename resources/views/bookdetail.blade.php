@include('header')
@extends('footer')
<?php
  use App\Models\Publisher;
  $publisher = Publisher::findOrFail($book->publisher_id);
?>
<link rel="stylesheet" href="{{ asset('css/bookdetail.css') }}">

<div class="center">
<div class="text">
    Book Detail
</div>
<div>
<img class="image" src="{{Storage::url($book->image)}}" height="75%" width="50%">
<p style="text-align:center;">Title: {{$book->title}}</p>
<p style="text-align:center;">Author: {{$book->author}}</p>
<p style="text-align:center;">Publisher: {{$publisher->name}}</p>
<p style="text-align:center;">Year: {{$book->year}}</p>
<p>Synopsis:</p>
<p>{{$book->synopsis}}</p>
</div>
</div>
</body>
</html>
