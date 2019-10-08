<!doctype html>
<html lang="ja">

<head>
  <title>Laravelチュートリアル</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body class="p-3">
  <h1>ブログ削除</h1>

  <form method="post" action="/room/delete">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" class="form-control" name="id" value="<?php echo e($room->id); ?>">
    <div class="form-group">
      <label for="titleInput">タイトル</label>
      <input type="text" class="form-control" id="titleInput" name="title" value="<?php echo e($room->title); ?>">
    </div>
    <div class="form-group">
      <label for="descriptionInput">説明</label>
      <textarea class="form-control" id="descriptionInput" rows="3" name="description"><?php echo e($room->description); ?></textarea>
    </div>
    <div class="form-group">
      <label for="imageInput">部屋イメージ</label>
      <input type="file" class="form-control" id="imageInput" name="image" value="<?php echo e($room->image); ?>">
    </div>
    <div class="form-group">
      <label for="seo_tagInput">SEOタグ</label>
      <textarea class="form-control" id="seo_tagInput" rows="3" name="seo_tag"><?php echo e($room->seo_tag); ?></textarea>
    </div>
    <div class="form-group">
      <label for="breadthInput">部屋の広さ</label>
      <?php $__currentLoopData = $breadthChecked; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadthCheck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <input type="checkbox" name="breadthCheck" value="<?php echo e($breadthCheck['breadth_id']); ?>" <?php echo e($breadthCheck['breadth_checked']); ?>> <?php echo e($breadthCheck['breadth_name']); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <input type="hidden" class="form-control" id="breadthInput" name="breadth">
    </div>
    <button type="submit" class="btn btn-primary">削除</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\hakobeya\resources\views/Room/show.blade.php ENDPATH**/ ?>