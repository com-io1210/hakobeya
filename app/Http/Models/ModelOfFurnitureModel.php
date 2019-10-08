<?php

namespace App\Http\Models;
use Illuminate\Http\Request;
use App\Room;
use App\Http\Controllers\Controller;

class ModelOfFurnitureModel extends Controller
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
        $furnituremodel, 
        $request, 
        $status
    ) {
        //バリデーションを設定する
        $root->validate($request, [
            'title' => 'required|max:50',
            'genle' => 'required|max:50',
            'search_word' => 'required|max:200',
            'number' => 'required',
            'image' => 'required',
        ]);
        
        //リクエストを保存
        $furnituremodel->title = $request->title;
        $furnituremodel->genle = $request->genle;
        $furnituremodel->search_word = $request->search_word;
        $furnituremodel->number = $request->number;
        $furnituremodel->image = $$root->saveImage($saveImage, 'furniture_model', $status);
    }

}
