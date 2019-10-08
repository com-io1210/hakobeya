<!doctype html>
<html lang="ja">
  <head>
    <title>部屋モデル一覧</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body class="p-3">
    <h1>部屋モデル一覧</h1>
    <form method="get">
      <label>キーワード</label>
      <input type="text" name="keyword">
      <label>広さ</label>
      <select name="breadth">
        <option value="">すべて</option>
        @foreach ($breadthSelects as $b)
        <option value="{{ $b['breadth_id'] }}">{{ $b['breadth_name'] }}</option>
        @endforeach
      </select>
      <input type="submit" class="btn btn-primary" value="検索">
      <input type="button" class="btn btn-primary" onclick="location.href='/admin/roommodel/create'" value="新規追加">
    </form>
    @foreach ($room_models as $room_model)
    <div class="box">
      <div class="card-body">
        <h4 class="card-title">{{ $room_model->room_id }}</h4>
        <!-- <h6 class="card-subtitle mb-2 text-muted">{{ $room_model->updated_at }}</h6> -->
        <p class="card-text">{{ $room_model->model }}</p>
        <a href="/admin/roommodel/edit/{{ $room_model->id }}" class="card-link">修正</a>
        <a href="/admin/roommodel/delete/{{ $room_model->id }}" class="card-link">削除</a>
      </div>
    </div>
    @endforeach
    <div class="paginate">
      {{ $room_models->links() }}
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>