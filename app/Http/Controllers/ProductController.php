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
        $product =  DB::table('products') 
        ->join('class_product', 'products.id_product', '=', 'class_product.id_product')
        ->select('products.*', 'class_product.*')
        ->where('products.id_product', '=', $id)
            ->get();

        return response()->json([
            'data' => $product,
            'message' => 'success'
        ], 201);
    }
    public function getProductByIdCategory($id)
    {  
        $product = product::where('id_category', '=', $id)->get();
        return response()->json([
            'data' => $product,
            'message' => 'success'
        ], 201);
    }
}
