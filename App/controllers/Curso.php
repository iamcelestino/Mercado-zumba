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
        $curso = $this->load_model('Curso');
        $dados_curso = $curso->findAll();

        $this->view('cursos', [
            'cursos' => $dados_curso
        ]);
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

    public function editar(int $id = null): void
    {
        $dado_curso = $this->curso->where('id_curso', $id);
        
        if(!$dado_curso) {
            $this->redirect('curso');
        }

        if(count($_POST) > 0) {

            if($this->curso->validar($_POST)) {
                $this->curso->update($id, $_POST);
                $this->redirect('curso');
            } else {
                echo "nao pude actualizar";
            }
        }

        $this->view('editar_curso', [
            'curso' => $dado_curso[0]
        ]);
    }

    public function deletar(int $id = null): void
    {   
        $dado_curso = $this->curso->where('id_curso', $id);
        
        if(!$dado_curso) {
            $this->redirect('curso');
        }

        if(count($_POST) > 0) {
            
            if($this->curso->validar($_POST)) {

                $this->curso->delete($id, $_POST);
                $this->redirect('curso');
                
            } else {
                echo "nao pude actualizar";
            }
        }

        $this->view('apagar_curso', [
            'curso' => $dado_curso[0]
        ]);
    }

}