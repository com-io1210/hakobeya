<!doctype html>
<html lang="ja">
  <head>
    <title>家具モデル一覧</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body class="p-3">
    <h1>家具モデル一覧</h1>
    <form method="get">
      <label>キーワード</label>
      <input type="text" name="keyword">
      <label>ジャンル</label>
      <select name="genle">
        <option value="">すべて</option>
        <?php $__currentLoopData = $genleSelects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($g['genle_id']); ?>"><?php echo e($g['genle_name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <input type="submit" class="btn btn-primary" value="検索">
      <input type="button" class="btn btn-primary" onclick="location.href='/admin/furnituremodel/creates'" value="新規追加">
    </form>
    <?php $__currentLoopData = $furniture_models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $furniture_model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="box">
      <div class="card-body">
        <h4 class="card-title"><?php echo e($furniture_model->title); ?></h4>
        <p class="card-text"><?php echo e($furniture_model->search_word); ?></p>
        <a href="/admin/furnituremodel/edit/<?php echo e($furniture_model->id); ?>" class="card-link">修正</a>
        <a href="/admin/furnituremodel/delete/<?php echo e($furniture_model->id); ?>" class="card-link">削除</a>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="paginate">
      <?php echo e($furniture_models->links()); ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\hakobeya\resources\views/admin/FurnitureModel/index.blade.php ENDPATH**/ ?>