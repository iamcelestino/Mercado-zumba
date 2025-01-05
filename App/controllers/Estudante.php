<?php

namespace App\Controllers;
use App\Core\Controller;


class Estudante extends Controller
{
    public function index(): void 
    {
        $this->view('estudante');
    }
}
