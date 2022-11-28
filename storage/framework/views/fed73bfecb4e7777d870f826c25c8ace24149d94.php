<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php
  use App\Models\Publisher;
  $publisher = Publisher::findOrFail($book->publisher_id);
?>

<link rel="stylesheet" href="<?php echo e(asset('css/bookdetail.css')); ?>">

<div class="center">

<div class="text">
    Book Detail
</div>

<div>
<img class="image" src="<?php echo e(Storage::url($book->image)); ?>" height="75%" width="50%">
<p style="text-align:center;">Title: <?php echo e($book->title); ?></p>
<p style="text-align:center;">Author: <?php echo e($book->author); ?></p>
<p style="text-align:center;">Publisher: <?php echo e($publisher->name); ?></p>
<p style="text-align:center;">Year: <?php echo e($book->year); ?></p>
<p>Synopsis:</p>
<p><?php echo e($book->synopsis); ?></p>
</div>

</div>

</body>
</html>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\uts\resources\views/bookdetail.blade.php ENDPATH**/ ?>