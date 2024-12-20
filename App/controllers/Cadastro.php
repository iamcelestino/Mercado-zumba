<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Usuario;

class Cadastro extends Controller 
{
    public mixed $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function professor()
    {   
        $this->cadastrar($_POST, $this->usuario);
        $this->view('adicionar_professor');
    }

    public function estudante()
    {   
       
        $this->view('adicionar_estudante');
    }

    
    public function cadastrar(array $dados_usuario, Usuario $usuario): void
    {
        if(count($dados_usuario) > 0) {
    
            $usuario = new $usuario();
    
            if($usuario->validar($dados_usuario)) {
                $usuario->insert($dados_usuario);
            } 
            else {
                die;
            }
        }
    }
}