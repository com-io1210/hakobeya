<!doctype html>
<html lang="ja">
  <head>
    <title>部屋モデル修正</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/roommodel.js"></script>
  </head>
  <body class="p-3">
    <h1>部屋モデル修正</h1>

    <form method="post" action="/admin/roommodel/edit" enctype="multipart/form-data">
      <?php echo e(csrf_field()); ?>

      <input type="hidden" class="form-control" name="id" value="<?php echo e($roommodel->id); ?>">
      <label for="room_idInput">部屋選択</label>
      <select name="room_id" id="room_idInput">
        <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value=<?php echo e($room->id); ?><?php if($room->id === $roommodel->id): ?> selected <?php endif; ?>><?php echo e($room->title); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
    <div class="form-group">
      <label for="breadthInput">部屋の広さ</label>
      <select name="breadth" id="breadthInput">
        <option value="1">3畳</option>
        <option value="2">4.5畳</option>
        <option value="3">6畳</option>
        <option value="4">8畳</option>
        <option value="5">12畳</option>
      </select>
    </div>
    <div class="form-group">
      <label for="modelInput">部屋モデル</label>
      <input type="file" class="form-control" id="modelInput" name="model">
    </div>
    <div class="form-group">
      <label for="furniture_modelInput">家具モデル</label>
      <?php $__currentLoopData = $furnitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $furniture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <input type="checkbox" name="fmodelCheck" value=<?php echo e($furniture->id); ?>> <?php echo e($furniture->title); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <input type="hidden" class="form-control" id="furniture_modelInput" name="furniture_modelInput">
    </div>
      <button type="submit" class="btn btn-primary">修正</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\hakobeya\resources\views/admin/RoomModel/edit.blade.php ENDPATH**/ ?>