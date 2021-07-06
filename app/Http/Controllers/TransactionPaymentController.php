<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransactionPayment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransactionPaymentController extends Controller
{
    public function webHookTransaction(Request $request)
    {
        Log::info('repuesta epayco: '.$request);
        $messageResponse = "not saved payment";
        if($request->x_cod_transaction_state == '1'){
            $payment = TransactionPayment::create($request->all());
            $messageResponse = "saved payment";
        }        

        return response()->json([
            'data' => !empty($payment) ? $payment : null,
            'message' => $messageResponse
        ], 200);
    }

    public function getPoductsByPayment($id)
    {
        $products =  DB::table('users_payments')
            ->join('products', 'users_payments.x_extra2', '=', 'products.id_product')
            //->join('products', 'chef_product.id_product', '=', 'products.id_product')
            ->select('products.*')
            ->where('users_payments.x_extra1', '=', $id)
            ->get();

        return response()->json([
            'data' => $products,
            'message' => 'success'
        ], 201);
    }
}
