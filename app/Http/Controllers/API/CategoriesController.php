<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => Categories::OrderBy('id','desc') -> get()
        ];

        return response()->json([
            'data' => $data,
            'status' => 'Success'
        ]);
    }

    public function create(Request $request)
    {
        $name = $request->name;

        try {
            Categories::create([
                'name' => $name
            ]);

            return response()->json([
                'status' => 'Success'
            ]);
        }
        
        catch (\Throwable $th) {
            return response()->json([
                'status' => 'Failure'
            ]);
        }

    }
}
