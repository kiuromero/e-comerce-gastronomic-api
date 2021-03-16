<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function add(Request $request)
    {
        $chef = Category::create($request->all());

        return response()->json([
            'data' => $chef,
            'message' => 'resource created'
        ], 201);

    }
    public function getAll(){
        $chef = Category::all();
        return response()->json([
            'data' => $chef,
            'message' => 'resource created'
        ], 201);
}
public function get($id){
    $chef = category::get()->where('id_category','=',$id);  
    return response()->json([
        'data' => $chef,
        'message' => 'resource created'
    ], 201);
}
}
