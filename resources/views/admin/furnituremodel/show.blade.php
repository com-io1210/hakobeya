<!doctype html>
<html lang="ja">

<head>
  <title>部屋削除</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body class="p-3">
  <h1>部屋削除</h1>
  <form method="post" action="/admin/furnituremodel/delete" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" class="form-control" name="id" value="{{ $furnituremodel->id }}">
    <div class="form-group">
      <label for="titleInput">タイトル</label>
      <input type="text" class="form-control" id="titleInput" name="title" value="{{ $furnituremodel->title }}">
    </div>
    <div class="form-group">
      <label for="genleInput">家具ジャンル</label>
      <select name="genle" id="genleInput">
        @foreach($genleSelects as $genleSelect)
        <option value={{ $genleSelect['genle_id'] }} {{ $genleSelect['genle_checked'] }}>{{ $genleSelect['genle_name'] }}</option>
        @endforeach
      </select>
      <!-- <input type="hidden" class="form-control" id="genleInput" name="genle"> -->
    </div>
    <div class="form-group">
      <label for="search_wordInput">楽天検索API用ワード</label>
      <input type="text" class="form-control" id="search_wordInput" name="search_word" value="{{ $furnituremodel->search_word }}">
    </div>
    <div class="form-group">
      <label for="numberInput">アフィリンク表示件数</label>
      <input type="text" class="form-control" id="numberInput" name="number" value="{{ $furnituremodel->number }}">
    </div>
    <div class="form-group">
      <label for="imageInput">アフィ一覧用画像</label>
      <img src="{{ $furnituremodel->image }}" alt="">
      <p>{{$furnituremodel->image}}</p>
    </div>
    <button type="submit" class="btn btn-primary">削除</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>