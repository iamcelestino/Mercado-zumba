<?php

namespace App\Controllers;
use App\Core\Controller;

class Admin  extends Controller
{
    public function index()
    {
        $this->view('dashboard');
    }

    public function produtos(): void
    {
        $produtos = $this->load_model('produto');
        $dados_produtos = $produtos->findAll();

        $this->view('admin_produtos', [
            'produtos' => $dados_produtos
        ]);
    }

    public function fornecedores(): void
    {
        $numero_de_produtos = [];

        $fornecedores = $this->load_model('fornecedor');
        $dados_fornecedores = $fornecedores->findAll();

        foreach($dados_fornecedores as $dados_fornecedor) {
            $numero_de_produtos[$dados_fornecedor->id_fornecedor] = $fornecedores->numero_de_productos($dados_fornecedor->id_fornecedor);
        }

        $this->view('admin_fornecedor', [
            'fornecedores' => $dados_fornecedores,
            'numero_de_produtos' => $numero_de_produtos
        ]);
    }

    public function vendas(): void
    {
        $vendas = $this->load_model('itemvenda');
        $dados_vendas = $vendas->findAll();

        $this->view('vendas', [
            'vendas' => $dados_vendas
        ]);
    }
}