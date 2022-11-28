@include('header')
@extends('footer')

<h1>Insert</h1>
        <form action="/storesbookcat" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="book_id">Book ID</label>
              <input type="number" class="form-control" name="book_id" id="book_id">
            </div>
            <div class="form-group">
              <label for="category_id">Category ID</label>
              <input type="number" class="form-control" name="category_id" id="category_id">
            </div>
        <button class="btn btn-primary">Add</button>
    </form>
</div>

</body>
</html>
