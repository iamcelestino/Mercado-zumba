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

    protected array $after_select = [
        'busca_fornecedor'
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

    public function busca_fornecedor($dados): array
    {
        $fornecedor = new Fornecedor();

        foreach($dados as $chave => $coluna) {
            $resultado = $fornecedor->where('id_fornecedor', $coluna->id_fornecedor);
            $dados[$chave]->fornecedor = is_array($resultado) ? $resultado[0] : false;
        }

        return $dados;
    }
<<<<<<< HEAD
=======

>>>>>>> 9567253 (feat: add methods to models)
}