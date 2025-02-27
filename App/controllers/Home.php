<?php

namespace App\Controllers;
use App\Core\Controller;

class home extends Controller 
{
    public function index(): void
    {
        $this->view('home');
    }
}