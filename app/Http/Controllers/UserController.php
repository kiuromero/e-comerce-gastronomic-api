<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function create(Request $request)
    {
        $result = (object) User::where('email', '=', $request->email)->get();

        if (sizeof($result) != 0) {
            return response()->json([
                'result' => $result,
                'error' => 'duplicated',
                'message' => 'this user exist'
            ], 201);
        } else {
            $user = new User();
            $user->id_user = $request->number_document;
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->doc_type = $request->doc_type;
            $user->password = Hash::make($request->password);
            $user->save();

            return response()->json([
                'data' => $user,
                'message' => 'resource created'
            ], 201);
        }
    }
}
