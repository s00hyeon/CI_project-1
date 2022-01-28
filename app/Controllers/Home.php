<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //$this -> $conn = connect();
        return view('user');
    }
}
