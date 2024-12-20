<?php

namespace App\Controllers;
use App\Core\Controller;

class Admin  extends Controller
{
    public function index()
    {
        $this->view('professor');
    }

    public function dashboard()
    {
        $this->view('adicionar_professor');
    }

}