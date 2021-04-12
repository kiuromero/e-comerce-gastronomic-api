<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersProducts;

class UsersProductsController extends Controller
{
    public function add(Request $request)
    {
        $chef = UsersProducts::create($request->all());

        return response()->json([
            'data' => $chef,
            'message' => 'resource created'
        ], 201);
    }
    public function getAll()
    {
        $chef = UsersProducts::all();
        return response()->json([
            'data' => $chef,
            'message' => 'resource created'
        ], 201);
    }
    public function get($id)
    {
        $chef = UsersProducts::get()->where('id_product', '=', $id);
        return response()->json([
            'data' => $chef,
            'message' => 'resource created'
        ], 201);
    }
}
