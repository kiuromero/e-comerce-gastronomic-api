<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Chef;

class ChefController extends Controller
{
    public function getChefById($id)
    {
        $chef =  DB::table('chef')
            ->join('chef_product', 'chef.id', '=', 'chef_product.id_chef')
            ->join('products', 'chef_product.id_product', '=', 'products.id_product')
            ->select('chef.*', 'chef_product.id_product', 'products.name', 'products.description', 'products.image')
            ->where('chef.id', '=', $id)
            ->get();

        return response()->json([
            'data' => $chef,
            'message' => 'success'
        ], 201);
    }

    public function getAll()
    {
        $chef = Chef::all();
        return response()->json([
            'data' => $chef,
            'message' => 'success'
        ], 201);
    }
}
