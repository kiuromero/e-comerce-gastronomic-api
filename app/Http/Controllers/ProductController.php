<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\product;
use Illuminate\Support\Facades\DB;

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
    public function getAll()
    {
        $chef = product::all();
        return response()->json([
            'data' => $chef,
            'message' => 'success'
        ], 201);
    }
    public function getProductByIdProduct($id)
    {
        $product =  DB::table('product') 
        ->join('class_product', 'product.id_pruduct', '=', 'class_product.id_product')
        ->select('product.*', 'class_product.*')
        ->where('id_pruduct', '=', $id)
            ->get();

        return response()->json([
            'data' => $product,
            'message' => 'success'
        ], 201);
    }
    public function getProductByIdCategory($id)
    {  
        $product = product::get()->where('id_category', '=', $id);
        return response()->json([
            'data' => $product,
            'message' => 'success'
        ], 201);
    }
}
