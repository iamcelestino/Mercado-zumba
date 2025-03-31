<?php

namespace App\controllers;

use App\Core\Controller;
use App\Model\{Itemvenda, Venda as modelo_venda};


class Venda extends Controller
{
    public mixed $modelo_venda;

    public function __construct()
    {
        $this->modelo_venda = new modelo_venda();
    }

    public function index(int $id): void
    {
        $produto = $this->load_model('produto');
        $dados_produto= $produto->where('id_produto', $id);

        $this->view('detalhes_produto', [
            'produto' => $dados_produto[0]
        ]);
    }


    // public function registra_venda() 
    // {
    //     if(count($_POST) > 0) {

    //         $dadosVenda = [
    //             'id_funcionario' => $_POST['id_funcionario'] ?? null,
    //         ];
    
    //         $itens = $_POST['itens'];

    //         $dadosVenda["total"] = array_reduce($itens, function ($total, $item) {
    //             return $total + ($item["quantidade"] * $item["preco_unitario"]);
    //         }, 0);
    
    //         $id_venda = $this->modelo_venda->criar_venda($dadosVenda, $itens);
    //         if ($id_venda) {
    //             $_SESSION['success'] = "Venda realizada com sucesso!";
    //             $this->redirect('venda');
    //         } else {
    //             $_SESSION['error'] = "Erro ao registrar venda.";
    //         }
    //     }

    //     $this->view('detalhes_produto');

    // }

    // public function criar_venda(array $dados_venda, array $itens)
    // {
    //     $database = new Database();

    //     $dados_venda['data_venda'] = date("Y-m-d");
    //     $dados_venda['hora_venda'] = date("H:i:s");

    //     try {
            
    //         $database->beginTransaction(); 
    
    //         $dadosVenda['data_venda'] = date("Y-m-d");
    //         $dadosVenda['hora_venda'] = date("H:i:s");
    
    //         $id_venda = $this->insert($dadosVenda);
    
    //         if (!$id_venda) {
    //             throw new Exception("Erro ao inserir venda.");
    //         }

    //         $item_venda = new ItemVenda();
    //         foreach ($itens as $item) {
    //             $item['id_venda'] = $id_venda;
    //             if (!$item_venda->insert($item)) {
    //                 throw new Exception("Erro ao inserir item da venda.");
    //             }
    //         }
    
    //         $database->commit(); 
    //         return $id_venda;
    
    //     } catch (Exception $e) {
    //         $database->rollback();
    //         return false;
    //     }
    // }
}