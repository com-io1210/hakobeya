<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomModel;
use App\Room;
use App\FurnitureModel;

class RoomModelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->keyword) {
            $room_model = RoomModel::where('room_id', 'LIKE', "%$request->keyword%")
            ->orWhere('breadth', $request->breadth)
            ->paginate(16);
        } else {
            $room_model = RoomModel::paginate(16);
        }
        return view('admin.RoomModel.index', ['room_models' => $room_model, 'breadthSelects' => $this->breadth_check]);
    }

    public function create()
    {
        $room = Room::all();
        $furnituremodel = FurnitureModel::all();
        return view('admin.RoomModel.create', ['rooms' => $room, 'furnitures' => $furnituremodel]);
    }

    public function store(Request $request)
    {
        $roommodel = new RoomModel;
        $roommodels = RoomModel::all();
        $this->save($roommodels, $roommodel, $request, 'create');

        return view('admin.RoomModel.store');
    }

    public function edit(Request $request, $id)
    {
        $roommodel = RoomModel::find($id);
        $room = Room::all();
        $furnituremodel = FurnitureModel::all();
        return view('admin.RoomModel.edit', ['roommodel' => $roommodel, 'rooms'=>$room, 'furnitures' => $furnituremodel]);
    }

    public function update(Request $request)
    {
        $roommodel = RoomModel::find($request->id);
        $this->save($roommodel, $roommodel, $request, 'update');

        return view('admin.RoomModel.update');
    }

    public function show(Request $request, $id)
    {
        $roommodel = RoomModel::find($id);
        return view('admin.RoomModel.show', ['roommodel' => $roommodel]);
    }

    public function delete(Request $request)
    {
        RoomModel::destroy($request->id);
        return view('admin.RoomModel.delete');
    }

    /**
     * 新規登録・編集時に保存するメソッド
     * @param saveImage imageを保存するときにどうするか
     * @param room roomインスタンス
     * @param request ポストされてきたリクエスト
     * @param status 登録時='create', 編集時='update'
     */ 
    public function save(
        $saveImage, 
        $roommodel, 
        $request, 
        $status
    ) {
        //バリデーションを設定する
        // $this->validate($request, [
        //     'room_id' => 'required',
        //     'breadth' => 'required',
        //     'model' => 'required',
        //     'furniture_model' => 'required',
        // ]);
        
        //リクエストを保存
        $roommodel->room_id = $request->room_id;
        $roommodel->breadth = $request->breadth;
        $roommodel->model = $this->saveFile($saveImage, $request, $status);
        $roommodel->furniture_model = $request->furniture_model;
        $roommodel->save();

    }
}
