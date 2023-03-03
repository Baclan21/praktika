<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/resources/views/css/style.css">
<div class="sliders"> 
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
  <?php if($loop->first): ?>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo e($b->products->img); ?>" class="d-block w-100" alt="...">
    </div>
<?php else: ?>
    <div class="carousel-item">
      <img src="<?php echo e($b->products->img); ?>" class="d-block w-100" alt="...">
    </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
</div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/astdvyrn/fgaxnba-m1/resources/views/about.blade.php ENDPATH**/ ?>