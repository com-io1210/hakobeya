<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\RoomModel;
use RakutenRws_Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $breadth_check = [
        ['breadth_id' => '1', 'breadth_name' => '3畳'],
        ['breadth_id' => '2', 'breadth_name' => '4.5畳'],
        ['breadth_id' => '3', 'breadth_name' => '6畳'],
        ['breadth_id' => '4', 'breadth_name' => '8畳'],
        ['breadth_id' => '5', 'breadth_name' => '12畳'],
    ];

    public $genleSelect = [
        ['genle_id' => 1, 'genle_name' => 'ソファ'],
        ['genle_id' => 2, 'genle_name' => '椅子・チェア'],
        ['genle_id' => 3, 'genle_name' => 'ベッド・マットレス'],
        ['genle_id' => 4, 'genle_name' => '布団・寝具・カバー'],
        ['genle_id' => 5, 'genle_name' => 'ラグ・マット'],
        ['genle_id' => 6, 'genle_name' => 'ダイニング'],
        ['genle_id' => 7, 'genle_name' => 'テーブル'],
        ['genle_id' => 8, 'genle_name' => 'ユニットシェルフ'],
        ['genle_id' => 9, 'genle_name' => 'テレビ台・テレビボード'],
        ['genle_id' => 10, 'genle_name' => '収納家具・本棚'],
        ['genle_id' => 11, 'genle_name' => 'ミラー・ドレッサー'],
        ['genle_id' => 12, 'genle_name' => '食器棚・キッチン収納'],
        ['genle_id' => 13, 'genle_name' => 'デスク・チェアー'],
        ['genle_id' => 14, 'genle_name' => 'こたつ'],
        ['genle_id' => 15, 'genle_name' => '照明'],
        ['genle_id' => 16, 'genle_name' => 'カーテン・スクリーン'],
    ];

    public function roomModelChecks() {
        $roomModel = RoomModel::all();
        $roomModelChecks = [];
        foreach ($roomModel as $r) {
            $roomModelChecks[] = ['id' => $r->id, 'model' => $r->model];
        } 
        // dd($roomModelChecks);
        return $roomModelChecks;
    }
    
    public function saveImage($rooms, $dir, $status, $request = null) {
        // dd($request);
        if ($status == 'create') {
            $count = count($rooms);
            $id = $rooms[$count-1]->id + 1;
        } else if ($status == 'update') {
            if ($rooms->image!=NULL) {
                return $rooms->image;
            }
            $id = $request->id;
        }

        // リクエストの全入力を取得する
        $input = Input::all();
        if(!array_key_exists('image', $input)){
            return null;
        }
        try {
             // getClientOriginalName()：アップロードしたファイルのオリジナル名を取得します
            $fileName = $input['image']->getClientOriginalName();
            // getRealPath()：アップロードしたファイルのパスを取得します。
            $image = Image::make($input['image']->getRealPath());
            // Auth::user()->nameのフォルダがあるかどうかを確認し、ない場合は新規作成する
            File::exists(public_path() . '/images/'.$dir.'/'.$id) or File::makeDirectory(public_path() . '/images/'.$dir.'/'.$id, 0777, TRUE);
            // サムネイルを保存する
            $image->save(public_path() . '/images/'.$dir.'/'.$id . '/' . $fileName)
            ->resize(200, null, function ($constraint) {$constraint->aspectRatio();})
            ->greyscale();
            
        } catch (Exception $e) {
            echo 'error';
        }

        return 'images/'.$dir.'/'.$id . '/' . $fileName;
    }

    public function saveFile($roommodels, $request, $status)
    {
        if ($status == 'create') {
            $count = count($roommodels);
            $id = $roommodels[$count-1]->id + 1;
        } else if ($status == 'update') {
            $id = $request->id;
        }
        $input = Input::all();
        if (!array_key_exists('model', $input)) {
            return null;
        } 
        try {
            File::exists(public_path() . '/models/'.$id) or File::makeDirectory(public_path() . '/models/'.$id, 0777, TRUE);
            //ファイルをテンポラリから保存場所へ移動
            $filename = public_path().'/models/'.$id.'/'.$input['model']->getClientOriginalName();
            move_uploaded_file($input['model']->path(), $filename);
        } catch (Exception $e) {
            echo 'error';
        }

        return 'models/'.$id.'/'.$input['model']->getClientOriginalName();
    }
    /** 
     * 楽天のアフィリエイトタグを取得する
     */
    public function rakutenProducts($furnitureData) {
        require_once 'rws-php-sdk-1.1.0/autoload.php';
        $client = new RakutenRws_Client();
        //IDを入力
        $client->setApplicationId('1076399332180181137');
        $client->setAffiliateId('1892dbf4.11bb34ba.1892dbf5.73ca818f');
        $dummy = [];
        $items = [];
        foreach ($furnitureData as $i => $f) {
            //キーワードを入力
            $response = $client->execute('IchibaItemSearch', array('keyword' => $f->search_word));
            //取得する商品数15
            if ($response->isOk()) {
                $k = 0; 
                $goods = 15; 
                $dummy = [];
                foreach ($response as $k => $item) { 
                    //サムネイルを取得しアフィリエイトリンクを挿入
                    if ($k >= $goods) {
                        break;
                    }
                    if ($item['imageFlag']==1) {
                        $ImageUrls = $item['mediumImageUrls'][0];
                        $item['Image'] = $ImageUrls['imageUrl'];
                    }
                    $dummy[] = $item;
                }
                $str = "";
               
                foreach ($dummy as $ic => $it) {
                    $str .= '<div class="goods'.$ic.'">';
                    $str .= "<a href=\"".$it['affiliateUrl'].'\" target="_blank"><img src="'.$it['Image'].'"></a>';
                    $str .= '<div class="price">'.$it['itemPrice']."円";
                    if ($it['postageFlag']==0) {
                        $str .= "送料込）</div>";
                    }
                    else{
                        $str .= "送料別）</div>";
                    }
                    $str .= '<div class="shop_name">'.$it['shopName']."</div>";
                    $str .= "</div>";
                }
                $items[] = $str;
            }
        }
        return $items;
    }

}
