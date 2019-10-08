<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomModel;

class RoomController extends Controller
{
    /**
     * 部屋一覧画面
     */
    public function index(Request $request)
    {
        if ($request->keyword) {
            $room = Room::where('title', 'LIKE', "%$request->keyword%")
            ->orWhere('description', 'LIKE', "%$request->keyword%")
            ->orWhere('seo_tag', 'LIKE', "%$request->keyword%")
            ->orWhere('breadth', $request->breadth)
            ->paginate(16);
        } else {
            $room = Room::paginate(16);
        }
        return view('admin.Room.index', ['rooms' => $room, 'breadthSelects' => $this->breadth_check]);
    }

    /**
     * 部屋新規作成画面
     */
    public function create()
    {
        return view(
            'admin.Room.create', 
            [
            'breadthChecks' => $this->breadth_check, 
            // 'roomModelChecks' => $this->roomModelChecks()
            ]
        );
    }

    /**
     * 部屋新規作成完了画面
     */
    public function store(Request $request)
    {   
        $rooms = Room::all();
        $room = new Room;
        $this->save($rooms, $room, $request, 'create');

        return view('admin.Room.store');
    }

    /**
     * 部屋更新画面
     */
    public function edit(Request $request, $id)
    {
        $room = Room::find($id);
        $room->breadth = explode(",", $room->breadth);
        $room->room_model = explode(",", $room->room_model);
        return view(
            'admin.Room.edit', 
            [
                'room' => $room, 
                'breadthChecked' => $this->breadth_check, 
                // 'roomModelChecks' => $this->roomModelChecks()
                ]
            );
    }

    /**
     * 部屋更新完了画面
     */
    public function update(Request $request)
    {
        $room = Room::find($request->id);
        $this->save($room, $room, $request, 'update');

        return view('admin.Room.update');
    }

    /**
     * 部屋参照画面
     */
    public function show(Request $request, $id)
    {
        $room = Room::find($id);
        return view('admin.Room.show', ['room' => $room]);
    }

    /**
     * 部屋削除完了画面
     */
    public function delete(Request $request)
    {
        Room::destroy($request->id);
        return view('admin.Room.delete');
    }

    
    public function threed(Request $request)
    {
        return view('admin.Room.threed');
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
        $room, 
        $request, 
        $status
    ) { 
        //バリデーションチェック
        if ($request->publish == 1 && !$room->image) {
            $request->validate([
                'title' => 'required|string|max:50',            // 必須・文字列・50文字以内
                'description' => 'required|string|max:1000',    // 必須・文字列・1000文字以内
                'image' => 'required',                          // 必須
                'seo_tag' => 'required|string|max:1000',        // 必須・文字列・1000文字以内
                'breadth' => 'required',                        // 必須
                // 'room_model' => 'required',                     // 必須
                'type_tag' => 'required|string|max:50',         // 必須・文字列・50文字以内
            ]);
        } else {
            $request->validate([
                'title' => 'required|string|max:50',            // 必須・文字列・50文字以内
                'description' => 'required|string|max:1000',    // 必須・文字列・1000文字以内
                'seo_tag' => 'required|string|max:1000',        // 必須・文字列・1000文字以内
                'breadth' => 'required',                        // 必須
                // 'room_model' => 'required',                     // 必須
                'type_tag' => 'required|string|max:50',         // 必須・文字列・50文字以内
            ]);
        }

        //リクエストを保存
        $room->title = $request->title;
        $room->description = $request->description;
        $room->image = $this->saveImage($saveImage, 'room', $status, $request);
        $room->seo_tag = $request->seo_tag;
        $room->breadth = $request->breadth;
        // $room->room_model = $request->room_model;
        $room->type_tag = $request->type_tag;
        $room->publish = $request->publish;
        $room->save();
    }
}
