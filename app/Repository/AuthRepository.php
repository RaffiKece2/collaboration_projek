<?php
    namespace App\Repository;

    use App\Models\User;


    class AuthRepository {

        public function daftarAkun(array $data) {

            if ($data['role'] == 'Admin' || $data['role'] == 'SuperAdmin') {

            $getInput = [

                'name' => $data['nama'],
                'email' => $data['email'],
                'password' => $data['password'],
                'role' => $data['role'],
                'status' => 'aktif'
                
                ];



             

            }

            $getInput = [

                'name' => $data['nama'],
                'email' => $data['email'],
                'password' => $data['password'],
                'role' => $data['role'],
                'status' => 'pending'
                
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