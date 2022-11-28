@include('header')
@extends('footer')

<?php
use App\Models\Book_Category;
$bc = Book_Category::join('books', 'books.id', '=', 'book__categories.book_id')->where('category_id', '=', $category->id)->get();
?>
<link rel="stylesheet" href="{{url('css/category.css')}}">

<div class="center">
<div class="text">
    <p> {{$category->name}}</p>
</div>
<div class="row row-cols-4 row-cols-md-4 g-4">
@foreach($bc as $book)
<div class="col">
    <div class="card" style="width: 100%; height: 100%;">
      <img src="{{Storage::url($book->image)}}" class="card-img-top" height="300px" width="100px" alt="Card image cap">
      <div class="card-body d-flex flex-column">
      <h5 class="card-title">{{$book->title}}</h5>
    <p class="card-text">by</p>
    <p class="card-text">{{$book->author}}</p>
    <a href="{{route('book.detail',$book->id)}}" class="btn btn-primary mt-auto">Detail</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
</div>
</body>
</html>
