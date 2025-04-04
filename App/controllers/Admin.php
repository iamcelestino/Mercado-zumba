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

    public function funcionarios(): void
    {

    }

    public function fornecedores(): void
    {
        $fornecedores = $this->load_model('fornecedor');
        $dados_fornecedores = $fornecedores->findAll();

        $this->view('admin_fornecedor', [
            'fornecedores' => $dados_fornecedores
        ]);
    }
    
}