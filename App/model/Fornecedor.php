<?php

namespace App\Model;
use App\Core\Model;

class Fornecedor extends Model
{
    protected array $allowed_columns = [
        'nome',
        'contacto',
        'endereco'
    ];

    protected array $before_insert = [

    ];

    public function validar(array $dados_usuario): bool
    {
        if (empty($dados_usuario['nome'])) {
            $this->errors['nome_usuario'] = "Nome inválido.";
        }

        if (empty($dados_usuario['contacto'])) {
            $this->errors['contacto'] = "Contacto de nascimento inválida.";
        }

        if (empty($dados_usuario['endereco'])) {
            $this->errors['endereco'] = "endereco de nascimento inválida.";
        }

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

}