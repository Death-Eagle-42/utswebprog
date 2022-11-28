<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php
  use App\Models\Book;
?>

<link rel="stylesheet" href="<?php echo e(url('css/publisher.css')); ?>">

<div class="center">
<div class = "text1">
    <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($publisher->name); ?></p>
        <p>Address - <?php echo e($publisher->address); ?></p>
        <p>Phone - <?php echo e($publisher->phone); ?></p>
        <p>Email - <?php echo e($publisher->email); ?></p>
    <div class = "img">
        <img width = "100px" height="100px" src="<?php echo e(Storage::url($publisher->image)); ?>">
    </div>

<?php
  $book = Book::where('publisher_id', '=', $publisher->id)->get();
?>

<div class="text2">
  <br>
<div class="white_space">
<div class="row row-cols-4 row-cols-md-4 g-4">

<?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col">
    <div class="card" style="width: 100%; height: 100%;">
      <img src="<?php echo e(Storage::url($book1->image)); ?>" class="card-img-top" height="300px" width="100px" alt="Card image cap">
      <div class="card-body d-flex flex-column">
      <h5 class="card-title"><?php echo e($book1->title); ?></h5>
    <p class="card-text">by</p>
    <p class="card-text"><?php echo e($book1->author); ?></p>
    <a href="<?php echo e(route('book.detail',$book1->id)); ?>" class="btn btn-primary mt-auto">Detail</a>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</body>
</html>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\uts\resources\views/publisher.blade.php ENDPATH**/ ?>