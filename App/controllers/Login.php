<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\{Usuario, Autenticacao};

class Login extends Controller
{
    protected mixed $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function index(): void
    {

        if(count($_POST) > 0) {

            if($dados_usuario = $this->usuario->where('email', $_POST['email']) ){
                
                    $dados_usuario = $dados_usuario[0];

            }
    }

    $this->view('login', []);
    
    }
}