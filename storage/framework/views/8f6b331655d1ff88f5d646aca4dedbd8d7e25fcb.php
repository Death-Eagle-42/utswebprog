<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<h1>Insert</h1>
        <form action="/storescat" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>

          <div class="form-group">
            <label for="name">Category</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
            </div>

        <button class="btn btn-primary">Add</button>
    </form>
</div>

</body>
</html>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\uts\resources\views/createcategory.blade.php ENDPATH**/ ?>