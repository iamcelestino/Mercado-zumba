<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Curso as modelo_curso;

class Curso extends Controller
{
    protected mixed $curso;

    public function __construct()
    {
        $this->curso = new modelo_curso();
    }

    public function index(): void
    {
        $this->view('cursos');
    }

    public function adicionar(): void
    {
        if(count($_POST) > 0) {
            
            if($this->curso->validar($_POST)) {
                $this->curso->insert($_POST);
                $this->redirect('curso');
            }
        }

        $this->view('adicionar_cursos');
    }

    public function editar(): void
    {

    }

    public function deletar(): void
    {

    }

}