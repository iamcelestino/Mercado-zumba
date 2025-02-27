<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Fornecedor as modelo;


class Fornecedor extends Controller 
{
    public mixed $fornecedor;
    public array $erros;

    public function __construct()
    {
        $this->fornecedor = new modelo();
    }

    public function index(): void
    {
        $this->view('fornecedores');
    }

    public function adicionar(): void
    {
        if(count($_POST)) {
            
            if($this->fornecedor->validar($_POST)) {
                $this->fornecedor->insert($_POST);
                $this->redirect('fornecedor');
            }
        }
        $this->view('adicionar_fornecedor');
    }

    public function editar(int $id = null): void
    {
        $fornecedores = $this->load_model('fornecedor');
        $fornecedor  = $fornecedores->where('id_fornecedor', $id);

        if(!$fornecedor) {
            $this->redirect('fornecedor');
        }

        if(count($_POST) > 0) {

            if($this->fornecedor->validar($_POST)) {
             
                $this->fornecedor->update($id, $_POST);
                $this->redirect("fornecedor");
            }
        }

        $this->view('editar_fornecedor', 
            ['fornecedor' => $fornecedor[0]]
        );
    }

    public function deletar(int $id = null): void
    {
        $fornecedores = $this->load_model('fornecedor');
        $fornecedor  = $fornecedores->where('id_fornecedor', $id);

        if(!$fornecedor) {
            $this->redirect('fornecedor');
        }

        if(count($_POST) > 0) {

            if($this->fornecedor->validar($_POST)) {

                $this->fornecedor->delete($id, $_POST);
                $this->redirect('fornecedor');
            }
        }

        $this->view('deletar_fornecedor', [
            'fornecedor' => $fornecedor[0]
        ]);
    }
}