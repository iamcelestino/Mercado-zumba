<?php

namespace App\Model;
use App\Core\Model;

class Fatura extends Model
{
    public array $erros = [];

    protected array $allowed_columns = [
        'id_fatura',
        'id_item_venda',
        'valor_total',
        'data_emissao'
    ];

    protected array $after_select = [
    ];
    
    protected array $before_insert = [
        // 'numero_fatura'
    ];

    public function validar($dados): bool
    {
        if(empty($dados['id_fatura'])) {
            $this->erros['id_fatura'] = "Numero invalido insira o numero de fatura";
        }

        if(empty($dados['data_emissao'])) {
            $this->erros['data_emissao'] = "data emissao invalida";
        }

        if(empty($dados['estado'])) {
            $this->erros['estado'] = " estado Ivalido";
        }

        if(empty($dados['valor_total'])) {
            $this->erros['valor_total'] = "total invalida";
        }

        if(count($this->erros) == 0) {
            return true;
        }

        return false;

    }

}
