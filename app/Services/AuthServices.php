<?php

    namespace App\Services;

    use App\Repository\AuthRepository;

    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Storage;



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

            if ($user && Hash::check($data['password'], $user->password)) {

                return response()->json([

                    'ok' => true,
                    'token' => $user->createToken('login-token')->plainTextToken,
                    'data' => $user

                ]);

            }

            return response()->json([

                'ok' => false

            ]);


        }


        public function edit_profile($id, array $data) {

            $data_user = $this->authRepository->getAkunById($id);

            $data_user->update([

                'name' => $data['nama'],
                'email' => $data['email'],

            ]);

            return $data_user;
            

        }

        public function change_password($data_user, array $data) {

            
            $data_user->password = Hash::make($data['password']);
            $data_user->save();

            return $data_user;

        }

    

    }










?>