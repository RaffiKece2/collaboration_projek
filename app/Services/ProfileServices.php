<?php

    namespace App\Services;

    use App\Repository\AuthRepository;


    class ProfileServices {

        protected AuthRepository $authRepository;

        public function __construct(AuthRepository $authRepository) {

            $this->authRepository = $authRepository;

        }

        public function change_foto($id, $path) {

            $data_user = $this->authRepository->getAkunById($id);

            $data_user->update([

                'gambar' => $path

            ]);

        }

    }






?>