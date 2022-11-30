@include('header')
@extends('footer')
<?php
  use App\Models\Book;
?>
<link rel="stylesheet" href="{{url('css/publisher.css')}}">

<div class="center">
<div class = "text1">
    @foreach($publishers as $publisher)
        <p>{{$publisher->name}}</p>
        <p>Address - {{$publisher->address}}</p>
        <p>Phone - {{$publisher->phone}}</p>
        <p>Email - {{$publisher->email}}</p>
    <div class = "img">
        <img width = "100px" height="100px" src="{{Storage::url($publisher->image)}}">
    </div>

<?php
  $book = Book::where('publisher_id', '=', $publisher->id)->get();
?>
<div class="text2">
  <br>
<div class="white_space">
<div class="row row-cols-4 row-cols-md-4 g-4">

@foreach($book as $book1)
<div class="col">
    <div class="card" style="width: 100%; height: 100%;">
      <img src="{{Storage::url($book1->image)}}" class="card-img-top" height="300px" width="100px" alt="Card image cap">
      <div class="card-body d-flex flex-column">
      <h5 class="card-title">{{$book1->title}}</h5>
    <p class="card-text">by</p>
    <p class="card-text">{{$book1->author}}</p>
    <a href="{{route('book.detail',$book1->id)}}" class="btn btn-primary mt-auto">Detail</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
</div>
@endforeach
</div>
</div>
</body>
</html>
