<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<link rel="stylesheet" href="<?php echo e(url('css/home.css')); ?>">

<div class="center">
<div class="text1">
    Book List
</div>

<div class="row row-cols-4 row-cols-md-4 g-4">
<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col">
    <div class="card" style="width: 100%; height: 100%;">
      <img src="<?php echo e(Storage::url($book->image)); ?>" class="card-img-top" height="300px" width="100px" alt="Card image cap">
      <div class="card-body d-flex flex-column">
      <h5 class="card-title"><?php echo e($book->title); ?></h5>
    <p class="card-text">by</p>
    <p class="card-text"><?php echo e($book->author); ?></p>
    <a href="<?php echo e(route('book.detail',$book->id)); ?>" class="btn btn-primary mt-auto">Detail</a>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</div>

</body>
</html>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\uts\resources\views/home.blade.php ENDPATH**/ ?>