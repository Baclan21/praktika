<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('add-form')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="container"
        <br>
        <div class="create-post">
            <h5> Админ панель.</h5>
            <form action="post" method="post">
                <?php echo csrf_field(); ?>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li> <?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Название товара</label>
      <input type="text" name="name" class="form-control is-valid" id="validationServer01" placeholder="Название товара" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Загрузите картинку</label>
      <input type="file" class="form-control is-valid" name="img" id="validationServer02" placeholder="img" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Цена</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">Р</span>
        </div>
        <input type="text" class="form-control is-invalid" id="validationServer" name="price" placeholder="Цена товара" aria-describedby="inputGroupPrepend3" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Количество</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Количество товара" name="quantity" required>
      <div class="invalid-feedback">
        Введите точное количество товара.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer04">State</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Описание товара" name="description" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer05">Укажите категорию товара.</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Категория товара" name="kategory" required>
      <div class="invalid-feedback">
        Пожалуйста выберите категорию.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/astdvyrn/fgaxnba-m1/resources/views/additem.blade.php ENDPATH**/ ?>