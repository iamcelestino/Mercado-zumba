<?php

namespace App\Model;
use App\Core\Model;

class Funcionario extends Model
{
    public array $erros = [];
    
    protected array $allowed_columns = [
        'nome',
        'contacto'
    ];

    protected $before_insert = [];

    public function validar(array $dados): bool
    {
        if(empty($dados['contacto'])) {
            $this->erros['contacto'] = 'insira uma contacto validdo';
        }

        if(count($this->erros) == 0) {
            return true;
        }

        return false;
    }
}