@include('header')
@extends('footer')

<h1>Insert</h1>
        <form action="/storesbook" method="POST" enctype="multipart/form-data">
          @csrf
            <label for="publisher_id">Publisher ID</label>
              <input type="number" class="form-control" name="publisher_id" id="publisher_id">
            </div>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" name="author" id="author" placeholder="Author">
            </div>
            <div class="form-group">
              <label for="year">Year</label>
              <input type="number" class="form-control" name="year" id="Year">
            </div>
            <div class="form-group">
              <label for="synopsis">Synopsis</label>
              <input type="text" class="form-control" name="synopsis" id="synopsis" placeholder="Synopsis">
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" name="image" id="image">
            </div>
            <button class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>
