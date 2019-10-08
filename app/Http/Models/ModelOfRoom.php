<?php

namespace App\Http\Models;
use Illuminate\Http\Request;
use App\Room;

class ModelOfRoom
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
        $room, 
        $request, 
        $status
    ) {
        //バリデーションを設定する
        // $root->validate($request, [
        //     'title' => 'required|max:50',
        //     'description' => 'required|max:1000',
        //     'image' => 'required',
        //     'seo_tag' => 'required|max:1000',
        //     'breadth' => 'required',
        //     'room_model' => 'required',
        //     'type_tag' => 'required',
        // ]);
        
        //リクエストを保存
        $room->title = $request->title;
        $room->description = $request->description;
        $room->image = $root->saveImage($saveImage, 'room', $status);
        $room->seo_tag = $request->seo_tag;
        $room->breadth = $request->breadth;
        $room->room_model = $request->room_model;
        $room->type_tag = $request->type_tag;
        $room->save();
    }

}
