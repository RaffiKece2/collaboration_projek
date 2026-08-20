<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\AuthServices;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
class AuthController extends Controller
{

    protected AuthServices $authServices;

    public function __construct(AuthServices $authServices) {

        $this->authServices = $authServices;

    }


    public function tambahAkun(RegisterRequest $request) {

        $this->authServices->tambah_akun($request->all());
        
        return response()->json([

            'ok' => true

        ]);

    }

    public function daftarAkun(LoginRequest $request) {


        return $this->authServices->daftar_akun($request->all());

    }

    

    //
}
