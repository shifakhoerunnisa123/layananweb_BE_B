<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'user'; // Ganti sesuai tabel pengguna Anda

    public function login($username, $password)
    {
        $user = $this->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Autentikasi berhasil
            return $user;
        } else {
            // Autentikasi gagal
            return null;
        }
    }
}
