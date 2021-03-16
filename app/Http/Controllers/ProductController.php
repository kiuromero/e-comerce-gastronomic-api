<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use Illuminate\Support\Facades\Validator;
use App\product;
class ProductController extends Controller
{
    public function add(Request $request)
    {
        $chef = product::create($request->all());

        return response()->json([
            'data' => $chef,
            'message' => 'resource created'
        ], 201);

    }
    public function getAll(){
        $chef = product::all();
        return response()->json([
            'data' => $chef,
            'message' => 'resource created'
        ], 201);
}
public function get($id){
    $chef = product::get()->where('id_product','=',$id);  
    return response()->json([
        'data' => $chef,
        'message' => 'resource created'
    ], 201);
}
    
}
