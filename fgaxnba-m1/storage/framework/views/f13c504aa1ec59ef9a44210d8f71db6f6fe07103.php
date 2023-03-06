<?php $__env->startSection('content'); ?>
<h1> Ваша корзина</h1>

<?php $__currentLoopData = $p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?php echo e($j->products->img); ?>" alt="">
    <div class="card-body">
      <h5 class="card-title"> <?php echo e($j->products->name); ?>

      </h5>
      <p class="card-text"></p>
      <a href="" class="btn btn-primary"><?php echo e($j->products->price); ?></a>
      <a href="/public/test/<?php echo e($j->id); ?>/delete" class="btn btn-primary">Удалить</a>
      
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/astdvyrn/fgaxnba-m1/resources/views/basket.blade.php ENDPATH**/ ?>