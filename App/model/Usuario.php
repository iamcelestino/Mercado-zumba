<?php

namespace App\Model;
use App\Core\Model;

class Usuario extends Model
{
    protected array $allowed_columns = [
        'nome',
        'palavra_passe',
        'funcao',
        'id_funcionario'
    ];

    protected array $before_insert = [
        'hash_password'
    ];

    public function validar(array $dados_usuario): bool
    {
        if (empty($dados_usuario['nome'])) {
            $this->errors['nome'] = "Nome inválido.";
        }

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function hash_password(array $dados_usuario): array 
    {
        $dados_usuario['palavra_passe'] = password_hash($dados_usuario['palavra_passe'], PASSWORD_DEFAULT);
        return $dados_usuario;
    }
}