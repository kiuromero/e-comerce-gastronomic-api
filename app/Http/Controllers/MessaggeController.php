<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MessageUser;

class MessaggeController extends Controller
{
    public function create(Request $request)
    {
        $message = MessageUser::create($request->all());

        return response()->json([
            'data' => $message,
            'message' => 'resource created'
        ], 201);
    }
}
