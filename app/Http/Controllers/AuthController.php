<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\AuthServices;

class AuthController extends Controller
{

    protected AuthServices $authServices;

    public function __construct(AuthServices $authServices) {

        $this->authServices = $authServices;

    }


    public function tambahAkun(Request $request) {

        $this->authServices->tambah_akun($request->all());
        
        return response()->json([

            'ok' => true

        ]);

    }

    //
}
