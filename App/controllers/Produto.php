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
        $produto = $this->load_model('produto');
        $dados_produto = $produto->findAll();

        $this->view('produtos', [
            'produtos' => $dados_produto
        ]);
    }

    public function detalhes(int $id = null)
    {
        $produto  = $this->load_model('produto');
        $dados_produto = $produto->where('id_produto', $id);

        $this->view('detalhes_produto', [
            'produto' => $dados_produto[0]
        ]);

    }

    public function adicionar(): void
    {

        $fornecedores = $this->load_model('fornecedor');
        $dados_fornecedores = $fornecedores->findAll();

        if(count($_POST) > 0) {

            if(count($_FILES) > 0) {
                
                $imagem = carregar_ficheiro($_FILES);

                $_POST['imagem'] = $imagem['imagem'] ?? null;
            }
            $this->produto->insert($_POST);
            $this->redirect('produto');
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