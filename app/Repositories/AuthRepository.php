<?php
    namespace App\Repository;

    use App\Models\User;


    class AuthRepository {

        public function daftarAkun(array $data) {

            $getInput = [

                'name' => $data['nama'],
                'email' => $data['email'],
                'password' => $data['password'],
                'role' => $data['role']
                
            ];


            return User::create($getInput);

        }

        public function getAkunByEmail($email) {

            return User::where('email', $email)->first();

        }

        public function getAkunById($id) {

            return User::find($id);

        }


    }








?>