<?php

namespace App\Model;
use App\Core\Model;

class Produto extends Model
{
    public array $erros;

    protected array $allowed_columns = [
        'nome',
        'categoria',
        'preco_unitario',
        'id_fornecedor',
        'imagem',
        'quantidade_estoque'
    ];

    protected array $before_insert = [];

    public function validar(array $dados)
    {
        if(empty($dados['nome'])) {
            $this->erros['nome'] = "Nome invalido, Digite outro nome";
        }

        if(empty($dados['categoria'])) {
            $this->erros['categoria'] = "";
        }

        if(empty($dados['preco_unitario'])) {
            $this->erros['preco_unitario'] = "";
        }

        if(empty($dados['quantidade_estoque'])) {
            $this->erros['quantidade_estoque'] = "";
        }

        if(count($this->errors) == 0) {
            return true;
        }
        return false;

    }
}