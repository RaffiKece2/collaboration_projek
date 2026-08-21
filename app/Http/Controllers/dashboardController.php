<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ProfileServices;



class dashboardController extends Controller
{

    protected ProfileServices $profileServices;

    public function __construct(ProfileServices $profileServices) {

        $this->profileServices = $profileServices;

    }

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

    public function changeFoto(Request $request) {

        $user = $request->user();

        $file = $request->file('foto');

        $path = $file->store('profile', 'public');

        $this->profileServices->change_foto($user->id, $path);

        return response()->json([

            'ok' => true

        ]);

    }
    //
}
