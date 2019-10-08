<?php

namespace App\Http\Models;
use Illuminate\Http\Request;
use App\Room;

class ModelOfRoomModel
{
    /**
     * 新規登録・編集時に保存するメソッド
     * @param saveImage imageを保存するときにどうするか
     * @param room roomインスタンス
     * @param request ポストされてきたリクエスト
     * @param status 登録時='create', 編集時='update'
     */ 
    public static function save(
        $root, 
        $saveImage, 
        $roommodel, 
        $request, 
        $status
    ) {
        //バリデーションを設定する
        $root->validate($request, [
            'room_id' => 'required',
            'breadth' => 'required',
            'model' => 'required',
            'furniture_model' => 'required',
        ]);
        
        //リクエストを保存
        $roommodel->room_id = $request->room_id;
        $roommodel->breadth = $request->breadth;
        $roommodel->model = $root->saveFile($saveImage, $request, $status);
        $roommodel->furniture_model = $request->furniture_model;
        $roommodel->save();

    }

}
