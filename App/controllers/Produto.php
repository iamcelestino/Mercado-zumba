<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\{Autenticacao, Produto as modelo_Produto, Venda, Itemvenda};
use Exception;

class Produto extends Controller
{
    public mixed $produto;
    public mixed $venda;
    public mixed $itemvenda;

    public function __construct()
    {
        $this->produto  = new modelo_Produto();
        $this->venda    = new Venda();
        $this->itemvenda = new Itemvenda();
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

        if(count($_POST) > 0) {

            try {
        
                $this->venda->beginTransaction();

                $_POST['id_funcionario'] = Autenticacao::getId_funcionario() ?? null;

                $this->venda->insert($_POST);

                $id_venda = $this->venda->lastInsertedId();

                if($id_venda) {
                  dd($id_venda);
                }

                $_POST['id_venda'] = $id_venda ?? null;

                $_POST["preco_total"] = $this->preco_total($_POST);

                $quantidade_vendida = $_POST['quantidade'] ?? null;

                if($dados_produto) {

                    $produto = $dados_produto[0];

                    $nova_quantidade = $produto->quantidade_estoque - $quantidade_vendida;

                    if ($nova_quantidade < 0) {
                        throw new Exception("Estoque insuficiente para o produto ID $id.");
                    }

                    $this->produto->update($id, ['quantidade_estoque' => $nova_quantidade]);
                }

                $this->itemvenda->insert($_POST);
                $this->venda->commit();

            } catch(Exception $e) {

                $this->venda->rollBack();
                echo $e->getMessage();

            }
        }

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

    public function preco_total(array $dados): mixed
    {
        return $dados['quantidade'] * $dados['preco_unitario'];
    }
}