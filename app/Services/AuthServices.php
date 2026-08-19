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

    }










?>