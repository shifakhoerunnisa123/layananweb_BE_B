<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\AuthModel; // Tambahkan baris ini
use CodeIgniter\Session\Session;
class AuthController extends BaseController
{
   use ResponseTrait;

   public function login()
   {
    $model = new AuthModel();
    $session = new Session();
       $username = $this->request->getPost('username');
       $password = $this->request->getPost('password');

       $authModel = new AuthModel();
       $user = $authModel->login($username, $password);

       if ($user) {
           // Autentikasi berhasil
           return $this->respond([
               'status' => 'success',
               'message' => 'Login successful',
               'data' => $user
           ]);
       } else {
           // Autentikasi gagal
           return $this->respond([
               'status' => 'error',
               'message' => 'Login failed'
           ]);
       }
   }
}
