<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\{Usuario, Funcionario};


class Cadastro extends Controller 
{
    public mixed $usuario;
    public mixed $funcionario;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->funcionario = new Funcionario();
    }

    public function index(): void
    {
        if(count($_POST) > 0) {

            $dados_funcionario = [
                'nome' => $_POST['nome'] ?? null,
                'contacto' => $_POST['contacto'] ?? null
            ];

            if($this->funcionario->validar($dados_funcionario)) {
               $funcionario = $this->funcionario->insert($dados_funcionario);
            }

            $funcionario = $this->load_model('funcionario');
            $funcionarios = $funcionario->findAll();

            if($funcionarios) {

                $ultimo_inserido = array_slice($funcionarios, -1)[0];
                $dados_usuario = [
                    'nome' => $_POST['nome'] ?? null,
                    'palavra_passe' => $_POST['palavra_passe'] ?? null,
                    'funcao' => $_POST['funcao'] ?? null,
                    'id_funcionario' => $ultimo_inserido->id_funcionario ?? null
                ];

                if($this->usuario->validar($dados_usuario)) {
                    $this->usuario->insert($dados_usuario);
                }
            }
       
        }

        $this->view('cadastro');
    }
    
}