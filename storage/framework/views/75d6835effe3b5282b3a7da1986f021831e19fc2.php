<!doctype html>
<html lang="ja">

<head>
  <title>家具モデル新規追加</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body class="p-3">
  <h1>家具モデル新規追加</h1>

  <form method="post" action="/furnituremodel/create">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
      <label for="titleInput">タイトル</label>
      <input type="text" class="form-control" id="titleInput" name="title">
    </div>
    <div class="form-group">
      <label for="genleInput">家具ジャンル</label>
      <select name="genle" id="genleInput">
        <?php $__currentLoopData = $genleSelects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genleSelect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value=<?php echo e($genleSelect['genle_id']); ?>><?php echo e($genleSelect['genle_name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <!-- <input type="hidden" class="form-control" id="genleInput" name="genle"> -->
    </div>
    <div class="form-group">
      <label for="titleInput">楽天検索API用ワード</label>
      <input type="text" class="form-control" id="search_wordInput" name="search_word">
    </div>
    <div class="form-group">
      <label for="titleInput">アフィリンク表示件数</label>
      <input type="text" class="form-control" id="numberInput" name="number">
    </div>
    <div class="form-group">
      <label for="titleInput">アフィ一覧用画像</label>
      <input type="file" class="form-control" id="imageInput" name="image">
    </div>
    <button type="submit" class="btn btn-primary">新規追加</button>
  </form>
  <script>
    // $(function() {
    //   //セレクトボックスの値をinputにセット
    //   $("#genleSelect").change(function() {
    //     $("#genleInput").val($("#genleSelect").val());
    //   });
    // });
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\hakobeya\resources\views/FurnitureModel/create.blade.php ENDPATH**/ ?>