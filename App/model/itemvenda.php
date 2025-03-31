<?php

declare(strict_types=1);

namespace App\Model;
use App\Core\Model;

class Itemvenda extends Model
{
    
    public array $erros = [];

    protected array $allowed_columns = [
        'id_produto',
        'id_venda',
        'preco_total',
        'quantidade'
    ];

    protected array $before_insert = [];

    public function validar(array $dados):  bool
    {

        if(empty($dados['id_produto'])) {
            $this->erros['id_produto'] = 'Id Produto Invalido';
        }

        if(empty($dados['id_venda'])) {
            $this->erros['id_venda'] = 'Id Venda Invalido';     
        }

        if(empty($dados['Preco_total'])) {
            $this->erros['preco_total'] = 'Preco total Invalido';
        }

        if(empty($dados['quantidade'])) {
            $this->erros['quantidade'] = 'Quantidade invalida';
        }

        if(count($this->erros) == 0) {
            return true;
        }

        return false;
    }

}