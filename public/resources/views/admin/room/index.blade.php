<!doctype html>
<html lang="ja">
  <head>
    <title>部屋一覧</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body class="p-3">
    <h1>部屋一覧</h1>
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
      <input type="button" class="btn btn-primary" onclick="location.href='/admin/room/create'" value="新規追加">
    </form>
    <!-- <p><a href="/admin/room/create" class="btn btn-primary">新規追加</a></p> -->
    <p><a href="/admin/room/threed" class="btn btn-primary">3d</a></p>
    @foreach ($rooms as $room)
    <div class="box">
      <div class="card-body">
        @if ($room->image)
        <img src="/{{ $room->image }}">
        @else
        <p>画像は未登録です</p>
        @endif
        <br>
        <h5 class="card-title">{{ $room->title }}</h4>
        <p class="card-text">{{ $room->description }}</p>
        <h6 class="card-subtitle mb-2 text-muted">{{ $room->updated_at }}</h6>
        <a href="/admin/room/edit/{{ $room->id }}" class="card-link">修正</a>
        <a href="/admin/room/delete/{{ $room->id }}" class="card-link">削除</a>
      </div>
    </div>
    @endforeach
    <div class="paginate">
      {{ $rooms->appends(Request::only('titlesubmit'))->links() }}
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>