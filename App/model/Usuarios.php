<?php

namespace App\Model;
use App\Core\Model;

class Usuario extends Model
{
    protected array $allowed_columns = [

    ];

    protected array $before_insert = [];

    public function validar(array $dados_usuario): bool
    {

        if(empty($dados_usuario['nome'])) {
            $this->errors['nome'] = "Nome invalido";
        }

        if(empty($dados_usuario['email'] || !filter_var($dados_usuario['email'], FILTER_VALIDATE_EMAIL))) {
            $this->errors['email'] = "Email invalido, por favor insira uma email valido";
        }

        if(empty($dados_usuario['data_nascimento'])) {
            
        }
        return false;
    }
}