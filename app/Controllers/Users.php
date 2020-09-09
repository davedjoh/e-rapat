<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);


        echo view('templates/public_header', $data);
        echo view('templates/public_navbar', $data);
        echo view('login', $data);
        echo view('templates/public_footer', $data);
    }
}
