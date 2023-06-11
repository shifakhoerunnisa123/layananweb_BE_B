<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class login extends ResourceController
{
    public function index()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validate the email and password here

        // Check if the email and password match in the database

        // Return appropriate response based on the login result
    }
}
