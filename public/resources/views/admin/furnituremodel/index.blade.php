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
        @foreach ($genleSelects as $g)
        <option value="{{ $g['genle_id'] }}">{{ $g['genle_name'] }}</option>
        @endforeach
      </select>
      <input type="submit" class="btn btn-primary" value="検索">
      <input type="button" class="btn btn-primary" onclick="location.href='/admin/furnituremodel/create'" value="新規追加">
    </form>
    @foreach ($furniture_models as $furniture_model)
    <div class="box">
      <div class="card-body">
        <h4 class="card-title">{{ $furniture_model->title }}</h4>
        <p class="card-text">{{ $furniture_model->search_word }}</p>
        <a href="/admin/furnituremodel/edit/{{ $furniture_model->id }}" class="card-link">修正</a>
        <a href="/admin/furnituremodel/delete/{{ $furniture_model->id }}" class="card-link">削除</a>
      </div>
    </div>
    @endforeach
    <div class="paginate">
      {{ $furniture_models->links() }}
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>