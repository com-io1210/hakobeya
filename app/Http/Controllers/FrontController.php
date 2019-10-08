<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\FurnitureModel;
use App\RoomModel;
class FrontController extends Controller
{
    public function index()
    {
        $room = Room::paginate(6);

        //タイプタグを配列に格納
        foreach ($room as $r) {
            $r->type_tag = explode(",", $r->type_tag);
        }

        return view('index', ['rooms' => $room]);
    }

    public function show(Request $request)
    {
        dd($request);
        $room = Room::find($request->id);
        
        //部屋モデル表示用
        $roomModels = RoomModel::where('room_id', $request->id)->get();
        //家具モデル表示用
        $roomModel = $roomModels[0];
        $furnitureModels = FurnitureModel::whereIn('id', explode(",", $roomModel->furniture_model))->get();
        //TODO: 広さで切り替えができるようにする
        $items = $this->rakutenProducts($furnitureModels);
        return view('show', ['room' => $room, 'model'=> $furnitureModels, 'item' => $items]);
    }

    public function rakuten ($class, $item) {
        foreach ($item[$class] as $ic => $it) {
            echo "<div class='goods".$class.">";
            echo "<a href=\"".it['item']['affiliateUrl'].'\" target="_blank"><img src='.$it['item']['Image'].'"></a>';
            echo '<div class="price">'.$it['item']['itemPrice']."円";
            if ($it['item']['postageFlag']==0) {
                echo "送料込）</div>";
            }
            else{
                echo "送料別）</div>";
            }
            echo '<div class="shop_name">'.$it['item']['shopName']."</div>";
            echo "</div>";
        }
    }
}
