<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class WeightController extends Controller
{
    //
    public function index()
    {
        $weight = Weight::get();
        return view('admin.bobot.index', compact('weight'));
    }

    public function update(Request $request)
    {

        $validate =  $request->validate([
            'calories'       => 'required|numeric|min:0',
            'proteins'       => 'required|numeric|min:0',
            'fat'           => 'required|numeric|min:0',
            'carbohydrate'  => 'required|numeric|min:0',
        ]);

        $total = $request->calories + $request->proteins + $request->fat + $request->carbohydrate;

        if ($total != 1) {
            return back()->withErrors(['total' => 'Total bobot harus sama dengan 1'])->withInput();
        }

        $fields = ['calories', 'proteins', 'fat', 'carbohydrate'];

        foreach ($fields as $field) {
            $insertToDB = Weight::where('name', $field)->update(['value' => $request->$field]);
        }

        Swal::toast([
            'position' => 'top-end',
            'timer' => 3000,
            'showConfirmButton' => false,
            'timerProgressBar' => true,
            'title' => 'Bobot berhasil diperbarui',
            'icon' => 'success',
        ]);

        return back();
    }
}
