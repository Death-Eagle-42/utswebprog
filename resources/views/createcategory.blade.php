@include('header')
@extends('footer')

<h1>Insert</h1>
        <form action="/storescat" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Category</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
            </div>
        <button class="btn btn-primary">Add</button>
    </form>
</div>
</body>
</html>
