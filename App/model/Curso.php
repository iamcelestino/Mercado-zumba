<?php

namespace App\Model;
use App\Core\Model;

class Curso extends Model
{
    protected array $allowed_columns = [
        'nome_curso',
        'descricao',
        'id_coordenador'
    ];
    
    protected array $before_insert = [
        'insira_id_coordenador'
    ];

    public function validar(array $dados_curso): bool
    {
        if(empty($dados_curso['nome_curso'])) {
            $this->errors['nome_curso'] = 'Nome de curso invalido';
        }

        if(empty($dados_curso['descricao'])) 
        {
            $this->errors['descricao'] = 'descricao nao pode estar vazia';
        }

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    protected function insira_id_coordenador(array $dados_curso): array
    {
        if(empty($dados_curso['id_coordenador'])) {

            $dados_curso['id_coordenador'] = null;
        }

        return $dados_curso;
    }
}