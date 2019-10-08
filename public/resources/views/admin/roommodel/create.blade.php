<!doctype html>
<html lang="ja">

<head>
  <title>部屋モデル新規追加</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/js/roommodel.js"></script>
</head>

<body class="p-3">
  <h1>部屋モデル新規追加</h1>

  <form method="post" action="/admin/roommodel/create" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="room_idInput">部屋選択</label>
      <select name="room_id" id="room_idInput">
        @foreach($rooms as $room)
        <option value={{ $room->id }}>{{ $room->title }}</option>
        @endforeach
      </select>
      <br>
      <p style="color:red;">{{$errors->first('title')}}</p>
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
      <br>
      <p style="color:red;">{{$errors->first('breadth')}}</p>
    </div>
    <div class="form-group">
      <label for="modelInput">部屋モデル</label>
      <input type="file" class="form-control" id="modelInput" name="model">
      <br>
      <p style="color:red;">{{$errors->first('model')}}</p>
    </div>
    <div class="form-group">
      <label for="furniture_modelInput">家具モデル</label>
      @foreach($furnitures as $furniture)
      <input type="checkbox" name="fmodelCheck" value={{ $furniture->id }}> {{ $furniture->title }}
      @endforeach
      <input type="hidden" class="form-control" id="furniture_modelInput" name="furniture_model">
      <br>
      <p style="color:red;">{{$errors->first('furniture_model')}}</p>
    </div>
    <button type="submit" class="btn btn-primary">新規追加</button>
  </form>
  <script>
    //チェックボックスの選択値をセット
    $(function() {
      var furniture = [];
      $(".btn").click(function() {
        furniture.length = 0;
        $('input:checkbox[name="fmodelCheck"]:checked').each(function() {
          furniture.push($(this).val());
          $('#furniture_modelInput').val(furniture);
        });
      });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>