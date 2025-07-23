<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use SweetAlert2\Laravel\Swal;

class DataController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $data = Food::limit(10)->where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('calories', 'LIKE', '%' . $search . '%')
            ->orWhere('proteins', 'LIKE', '%' . $search . '%')
            ->orWhere('fat', 'LIKE', '%' . $search . '%')
            ->orWhere('carbohydrate', 'LIKE', '%' . $search . '%')
            ->orderByDesc('id')
            ->paginate(15);
        return view('admin.data.index', compact('data'));
    }

    public function create(Request $request)
    {

        $validate = $request->validate([
            'name'          => 'required|unique:foods,name',
            'calories'      => 'required|numeric',
            'proteins'      => 'required|numeric',
            'fat'           => 'required|numeric',
            'carbohydrate'  => 'required|numeric',
            'image'         => 'required|image',
        ]);

        $imageName = $request->file('image')->store('images', 'public');

        $upload = Food::create([
            'name'          => $request->name,
            'calories'      => $request->calories,
            'proteins'      => $request->proteins,
            'fat'           => $request->fat,
            'carbohydrate'  => $request->carbohydrate,
            'image'         => $imageName,
        ]);

        Swal::toast([
            'position'          => 'top-end',
            'timer'             => 3000,
            'showConfirmButton' => false,
            'timerProgressBar'  => true,
            'title'             => 'Berhasil menambahkan data',
            'icon'              => 'success',
        ]);

        return redirect()->back();
    }

    public function delete($id)
    {
        $data = Food::findOrFail($id);

        if ($data->image) {
            Storage::disk('public')->delete($data->image);
        }

        $data->delete();

        Swal::toast([
            'position'          => 'top-end',
            'timer'             => 3000,
            'showConfirmButton' => false,
            'timerProgressBar'  => true,
            'title'             => 'Berhasil menghapus data',
            'icon'              => 'success',
        ]);

        return redirect()->route('data');
    }

    public function update(Request $request)
    {
        // dd($id, $request->image);

        $data = Food::findOrFail($request->id);

        $data->name = $data->name . uniqid('_');
        $data->save();

        $validate = $request->validate([
            'name'          => 'required|unique:foods,name',
            'calories'      => 'required|numeric',
            'proteins'      => 'required|numeric',
            'fat'           => 'required|numeric',
            'carbohydrate'  => 'required|numeric',
        ]);

        if ($request->image != null) {

            $imageName = $request->file('image')->store('images', 'public');

            if ($data->image != null) {
                Storage::disk('public')->delete($data->image);
            }

            $upload = $data->update([
                'name'          => $request->name,
                'calories'      => $request->calories,
                'proteins'      => $request->proteins,
                'fat'           => $request->fat,
                'carbohydrate'  => $request->carbohydrate,
                'image'         => $imageName,
            ]);
        } else {
            $upload = $data->update([
                'name'          => $request->name,
                'calories'      => $request->calories,
                'proteins'      => $request->proteins,
                'fat'           => $request->fat,
                'carbohydrate'  => $request->carbohydrate,
            ]);
        }

        Swal::toast([
            'position'          => 'top-end',
            'timer'             => 3000,
            'showConfirmButton' => false,
            'timerProgressBar'  => true,
            'title'             => 'Berhasil mengubah data',
            'icon'              => 'success',
        ]);


        return back();
    }
}
