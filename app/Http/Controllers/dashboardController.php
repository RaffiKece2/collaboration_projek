<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class dashboardController extends Controller
{

    public function dashboard(Request $request) {

        $user = $request->user();

        return response()->json([

            'ok' => true,
            'user' => $user

        ]);

    }

    public function profile(Request $request) {

        $user = $request->user();

        return response()->json([

            'ok' => true,
            'user' => $user

        ]);

    }
    //
}
