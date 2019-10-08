<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FurnitureModel;

class FurnitureModelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->keyword) {
            $furniture_model = FurnitureModel::where('title', 'LIKE', "%$request->keyword%")
            ->orWhere('genle', 'LIKE', "%$request->genle%")
            ->orWhere('search_word', 'LIKE', "%$request->keyword%")
            ->paginate(16);
        } else {
            $furniture_model = FurnitureModel::paginate(16);
        }
        return view('admin.FurnitureModel.index', ['furniture_models' => $furniture_model, 'genleSelects' => $this->genleSelect]);
    }

    public function create()
    {
        return view('admin.FurnitureModel.create', ['genleSelects' => $this->genleSelect]);
    }

    public function store(Request $request)
    {
        $furnituremodel = new FurnitureModel;
        $furnituremodels = FurnitureModel::all();
        $this->save($furnituremodels, $furnituremodel, $request, 'create');

        return view('admin.FurnitureModel.store');
    }

    public function edit(Request $request, $id)
    {
        $furnituremodel = FurnitureModel::find($id);
        foreach ($this->genleSelect as $g) {
            if ($g['genle_id'] == $furnituremodel->id) {
                $g['genle_selected'] = 'selected';
            }
        }
        return view('admin.FurnitureModel.edit', ['furnituremodel' => $furnituremodel], ['genleSelects' => $this->genleSelect]);
    }

    public function update(Request $request)
    {
        $furnituremodel = FurnitureModel::find($request->id);
        $this->save($furnituremodel, $furnituremodel, $request, 'update');

        return view('admin.FurnitureModel.update');
    }

    public function show(Request $request, $id)
    {
        $furnituremodel = FurnitureModel::find($id);
        return view('admin.FurnitureModel.show', ['furnituremodel' => $furnituremodel]);
    }

    public function delete(Request $request)
    {
        FurnitureModel::destroy($request->id);
        return view('admin.FurnitureModel.delete');
    }

    public function save (
        $saveImage, 
        $furnituremodel, 
        $request, 
        $status
    ) {
        $furnituremodel->title = $request->title;
        $furnituremodel->genle = $request->genle;
        $furnituremodel->search_word = $request->search_word;
        $furnituremodel->number = $request->number;
        $furnituremodel->image = $this->saveImage($saveImage, $furnituremodel, $status, $request);
        $furnituremodel->save();
    }
}
