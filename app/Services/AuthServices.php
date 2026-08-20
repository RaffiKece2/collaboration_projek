<?php

    namespace App\Services;

    use App\Repository\AuthRepository;

    use Illuminate\Support\Facades\Hash;



    class AuthServices {

        protected AuthRepository $authRepository;

        public function __construct(AuthRepository $authRepository) {

            $this->authRepository = $authRepository;

        }


        public function tambah_akun(array $data) {

            $data['password'] = Hash::make($data['password']);

            return $this->authRepository->daftarAkun($data);

        }

        public function daftar_akun(array $data) {


            $user = $this->authRepository->getAkunByEmail($data['email']);

            if ($user || Hash::check($data['password'], $user->password)) {

                return response()->json([

                    'ok' => true,
                    'token' => $user->createToken('login-token')->plainTextToken

                ]);

            }

            return response()->json([

                'ok' => false

            ]);


        }

    }










?>