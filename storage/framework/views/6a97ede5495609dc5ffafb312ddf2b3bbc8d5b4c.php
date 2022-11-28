<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<h1>Insert</h1>
        <form action="/storesbookcat" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>

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

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\uts\resources\views/createbookcategory.blade.php ENDPATH**/ ?>