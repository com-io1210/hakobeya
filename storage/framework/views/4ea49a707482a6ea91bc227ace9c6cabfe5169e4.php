<!doctype html>
<html lang="ja">
  <head>
    <title>部屋モデル一覧</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="p-3">
    <h1>部屋モデル一覧</h1>
    <p><a href="/roommodel/create" class="btn btn-primary">新規追加</a></p>
    <?php $__currentLoopData = $room_models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room_model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-2">
      <div class="card-body">
        <h4 class="card-title"><?php echo e($room_model->room_id); ?></h4>
        <!-- <h6 class="card-subtitle mb-2 text-muted"><?php echo e($room_model->updated_at); ?></h6> -->
        <p class="card-text"><?php echo e($room_model->model); ?></p>
        <a href="/roommodel/edit/<?php echo e($room_model->id); ?>" class="card-link">修正</a>
        <a href="/roommodel/delete/<?php echo e($room_model->id); ?>" class="card-link">削除</a>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\hakobeya\resources\views/RoomModel/index.blade.php ENDPATH**/ ?>