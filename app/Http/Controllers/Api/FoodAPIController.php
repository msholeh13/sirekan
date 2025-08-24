<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Weight;
use Illuminate\Http\Request;
use Illuminate\Support\Js;

class FoodAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::select('id', 'name', 'image', 'calories', 'proteins', 'fat', 'carbohydrate')->get();

        $foods->transform(function ($food) {
            $food->image = asset('storage/' . $food->image);
            return $food;
        });


        return response()->json($foods);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $food =  Food::select('id', 'name', 'image', 'calories', 'proteins', 'fat', 'carbohydrate')
            ->findOrFail($id);

        $food->image = asset('storage/' . $food->image);

        return response()->json($food);
    }

    public function getMaxValues()
    {
        return response()->json([
            'calories' => Food::max('calories') ?? 1,
            'proteins' => Food::max('proteins') ?? 1,
            'fat' => Food::max('fat') ?? 1,
            'carbohydrate' => Food::max('carbohydrate') ?? 1,
        ]);
    }

    public function getWeights()
    {
        return response()->json(Weight::pluck('value', 'name')->toArray());
    }
}
