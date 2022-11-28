<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<h1>Insert</h1>
        <form action="/storesbook" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>

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

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\uts\resources\views/createbook.blade.php ENDPATH**/ ?>