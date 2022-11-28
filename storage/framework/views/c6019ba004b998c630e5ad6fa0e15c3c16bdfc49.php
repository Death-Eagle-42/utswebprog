<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<h1>Insert</h1>
        <form action="/storespub" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>

            <div class="form-group">
            <label for="name">Publisher Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Pub Name">
            </div>

            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Address">
            </div>

            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="email">
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

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\uts\resources\views/createpublisher.blade.php ENDPATH**/ ?>