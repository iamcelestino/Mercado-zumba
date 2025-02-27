<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\{Produto as modelo_Produto};


class Produto extends Controller
{
    public mixed $produto;

    public function __construct()
    {
        $this->produto = new modelo_Produto();
    }
    public function index(): void
    {
        $this->view('produtos');
    }

    public function adicionar(): void
    {
        $fornecedores = $this->load_model('fornecedor');
        $dados_fornecedores = $fornecedores->findAll();

        if(count($_POST) > 0) {
            $this->produto->insert($_POST);
            $this->redirect('produtos');
        }

        $this->view('adicionar_produto', [
            'fornecedores' => $dados_fornecedores
        ]);
    }

    public function editar(int $id = null): void
    {
        $fornecedores = $this->load_model('fornecedor');
        $dados_fornecedores = $fornecedores->findAll();

        $produto = $this->load_model('produto');
        $dados_produto = $produto->where('id_produto', $id);

        if(count($_POST) > 0) {
            $this->produto->update($id, $_POST); 
        }

        $this->view('editar_produto', [
            'produto' => $dados_produto[0],
            'fornecedores' => $dados_fornecedores
        ]);

    }

    public function deletar(int $id = null): void
    {

        $fornecedores = $this->load_model('fornecedor');
        $dados_fornecedores = $fornecedores->findAll();

        $produto = $this->load_model('produto');
        $dados_produto = $produto->where('id_produto', $id);

        if(count($_POST) > 0) {
            $this->produto->delete($id, $_POST); 
            $this->redirect('produto');
        }

        $this->view('deletar_produto', [
            'produto' => $dados_produto[0],
            'fornecedores' => $dados_fornecedores
        ]);
    }
}