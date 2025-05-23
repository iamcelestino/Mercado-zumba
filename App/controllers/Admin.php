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

        $fornecedor = $this->load_model('fornecedor');
        $fornecedores = $fornecedor->findAll();

        $total_de_produtos = $fornecedor->total_produtos();

        $this->view('admin_produtos', [
            'fornecedores' => $fornecedores,
            'produtos' => $dados_produtos,
            'quantidade_produtos' => $total_de_produtos[0]->numero_produtos
        ]);
    }

    public function fornecedores(): void
    {
        $numero_de_produtos = [];

        $fornecedores = $this->load_model('fornecedor');
        $dados_fornecedores = $fornecedores->findAll();

        $total_de_produtos = $fornecedores->total_produtos()[0]->numero_produtos;

        foreach($dados_fornecedores as $dados_fornecedor) {
            $numero_de_produtos[$dados_fornecedor->id_fornecedor] = $fornecedores->numero_de_productos($dados_fornecedor->id_fornecedor);
        }

        $this->view('admin_fornecedor', [
            'fornecedores' => $dados_fornecedores,
            'numero_de_produtos' => $numero_de_produtos,
            'total_de_produtos' => $total_de_produtos
        ]);
    }

    public function vendas(): void
    {
        $vendas = $this->load_model('itemvenda');
        $dados_vendas = $vendas->findAll();

        $numero_de_produtos_vendidos = $vendas->produtos_vendidos()[0]->produtos_vendidos;
        $valor_total_de_vendas = $vendas->valor_total()[0]->valor_de_vendas;

        $this->view('vendas', [
            'vendas' => $dados_vendas,
            'numero_de_produtos_vendidos' =>  $numero_de_produtos_vendidos,
            'valor_total_de_vendas' => $valor_total_de_vendas
        ]);
    }
}