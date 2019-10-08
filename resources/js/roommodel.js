//家具モデルのチェックボックスをカンマ区切りで格納
$('button').on('click', function () {
    var vals = $("input[name='check']:checked").map(function () {
        return $(this).val();
    }).get();
    $('#furniture_modelInput').val($vals);
});