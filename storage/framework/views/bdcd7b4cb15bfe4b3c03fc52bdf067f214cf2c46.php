<!doctype html>
<html lang="ja">

<head>
  <title>部屋修正</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>

<body class="p-3">
  <h1>部屋修正</h1>

  <form method="post" action="/admin/room/edit" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" class="form-control" name="id" value="<?php echo e($room->id); ?>">
    <div class="form-group">
      <label for="titleInput">タイトル</label>
      <input type="text" class="form-control" id="titleInput" name="title" value="<?php echo e($room->title); ?>">
      <br>
      <p style="color:red;"><?php echo e($errors->first('title')); ?></p>
    </div>
    <div class="form-group">
      <label for="descriptionInput">説明</label>
      <textarea class="form-control" id="descriptionInput" rows="3" name="description"><?php echo e($room->description); ?></textarea>
      <br>
      <p style="color:red;"><?php echo e($errors->first('description')); ?></p>
    </div>
    <div class="form-group">
      <label for="imageInput">部屋イメージ</label>
      <img src="/<?php echo e($room->image); ?>">
      <input type="file" class="form-control" id="imageInput" name="image">
      <br>
      <p style="color:red;"><?php echo e($errors->first('image')); ?></p>
    </div>
    <div class="form-group">
      <label for="seo_tagInput">SEOタグ</label>
      <textarea class="form-control" id="seo_tagInput" rows="3" name="seo_tag"><?php echo e($room->seo_tag); ?></textarea>
      <br>
      <p style="color:red;"><?php echo e($errors->first('seo_tag')); ?></p>
    </div>
    <div class="form-group">
      <label for="breadthInput">部屋の広さ</label><br>
      <?php $__currentLoopData = $breadthChecked; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadthCheck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <input type="checkbox" name="breadthCheck" value="<?php echo e($breadthCheck['breadth_id']); ?>" <?php if(array_search($breadthCheck['breadth_id'], $room->breadth)!==false): ?> checked <?php endif; ?>> <?php echo e($breadthCheck['breadth_name']); ?><br>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <br>
      <p style="color:red;"><?php echo e($errors->first('breadth')); ?></p>
      <input type="hidden" class="form-control" id="breadthInput" name="breadth">
    </div>
    <div class="form-group">
      <label for="titleInput">部屋タイプ</label>
      <input type="text" class="form-control" id="type_tagInput" name="type_tag" value="<?php echo e($room->type_tag); ?>"">
      <br>
      <p style="color:red;"><?php echo e($errors->first('type_tag')); ?></p>
    </div>
    <div class="form-group">
      <label for="publishInput">公開する</label>
      <input type="checkbox" name="publish" value="1" <?php if($room->publish == 1): ?> checked <?php endif; ?>>
    </div>
    <button type="submit" class="btn btn-primary">修正</button>
  </form>

  <script>
    //チェックボックスの選択値をセット
    $(function() {
      var breadth = [];
      $(".btn").click(function() {
        breadth.length = 0;
        $('input:checkbox[name="breadthCheck"]:checked').each(function() {
          breadth.push($(this).val());
          $('#breadthInput').val(breadth);
        });
      });

      var room_model = [];
      $(".btn").click(function() {
        room_model.length = 0;
        $('input:checkbox[name="roomModel"]:checked').each(function() {
          room_model.push($(this).val());
          $('#room_modelInput').val(room_model);
        });
      });
    });
  </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\hakobeya\resources\views/admin/Room/edit.blade.php ENDPATH**/ ?>