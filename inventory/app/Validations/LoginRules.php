<?php

namespace App\Validations;

use CodeIgniter\Validation\Rules;

class LoginRules
{
    public function login(array $data): bool
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ];

        return (new Rules())->run($data, $rules);
    }
}
