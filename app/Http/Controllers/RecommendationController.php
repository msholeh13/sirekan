<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Weight;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function index()
    {
        $topResults = session('topResults');
        return view('admin.rekomendasi.index', compact('topResults'));
    }


    // rumus menghitung similarity
    public function calculateSingularity(array $userNeeds, array $foodItem, array $maxValues, array $weights)
    {
        $similarity = 0;
        foreach ($weights as $key => $weight) {
            $diff = abs($userNeeds[$key] - $foodItem[$key]) / ($maxValues[$key] ?: 1);
            $attrSimilarity = 1 - $diff;
            $similarity += $weight * $attrSimilarity;
        }
        return $similarity;
    }

    public function findRecommendation(Request $request)
    {
        $foodItems = Food::all();
        $weights = Weight::pluck('value', 'name')->toArray();
        $maxValues = [
            'calories'      => $foodItems->max('calories'),
            'proteins'      => $foodItems->max('proteins'),
            'fat'           => $foodItems->max('fat'),
            'carbohydrate'  => $foodItems->max('carbohydrate'),
        ];
        $userNeeds = [
            'calories'      => $request->input('calories', 0),
            'proteins'      => $request->input('proteins', 0),
            'fat'           => $request->input('fat', 0),
            'carbohydrate'  => $request->input('carbohydrate', 0),
        ];

        // menghitung nilai similarity
        $results = [];

        foreach ($foodItems as $item) {
            $foodData = [
                'calories'      => $item->calories,
                'proteins'      => $item->proteins,
                'fat'           => $item->fat,
                'carbohydrate'  => $item->carbohydrate,
            ];

            $similarity = $this->calculateSingularity($userNeeds, $foodData, $maxValues, $weights);

            $results[] = [
                'item'          => $item,
                'similarity'    => round($similarity, 5),
            ];
        }

        // urutkan dari nilai similarity tertinggi
        usort($results, function ($a, $b) {
            return $b['similarity'] <=> $a['similarity'];
        });

        // batasi yang keluar hanya 10 teratas
        $topResults = array_slice($results, 0, 10);

        // dd($topResults);

        return response()->json([
            'recommendations' => $topResults,
        ]);
    }


    public function findRecommendationAdmin(Request $request)
    {

        $validate = $request->validate([
            'calories'      => 'nullable|numeric|min:0',
            'proteins'      => 'nullable|numeric|min:0',
            'fat'           => 'nullable|numeric|min:0',
            'carbohydrate'  => 'nullable|numeric|min:0',
        ]);

        $response = $this->findRecommendation($request);
        $topResults = json_decode($response->getContent())->recommendations;


        return redirect()
            ->route('recommendation')
            ->with([
                'topResults' => $topResults,
            ])
            ->withInput();
    }
}
