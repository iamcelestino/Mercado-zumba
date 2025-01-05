<?php

namespace App\Controllers;
use App\Core\Controller;

class Professor  extends Controller
{
    public function index()
    {
        $this->view('professor');
    }
}