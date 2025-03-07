<?php
namespace App\Model;
use App\Core\Model;

class Venda extends Model
{
    public array $erros = [];

    protected array $allowed_columns = [
        'id_funcionario',
        'data_venda',
        'hora_venda',
        'total'
    ];

    protected array $before_insert = [];

    public function validar(array $dados): bool
    {
        if(empty($dados['id_funcionario'])) {
            $this->erros['id_funcionario'] = 'id funcionario vazio';
        }

        if(empty($dados['data_venda'])) {
            $this->erros['data_venda'] = 'Data de venda invalido';
        }

        if(empty($dados['hora_venda'])) {
            $this->erros['hora_venda'] = 'Hora venda invalido';
        }

        if(empty($dados['total']) || !is_int($dados['total'])) {
            $this->erros['total'] = 'Valor total da venda';
        }

        if(count($this->erros) == 0) {
            return true;
        }

        return false;
    }
}