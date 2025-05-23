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

    protected array $after_select = [
        'busca_produtos',
        'busca_vendas'
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

    public function busca_produtos(array $dados): array
    {
        $produtos = new Produto();
        foreach($dados as $chave => $coluna) {
            $resultado = $produtos->where('id_produto', $coluna->id_produto);
            $dados[$chave]->produto = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }

    public function busca_vendas(array $dados): array
    {
        $vendas = new Venda();

        foreach($dados as $chave => $coluna) {
            $resultado = $vendas->where('id_venda', $coluna->id_venda);
            $dados[$chave]->venda = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }

    public function produtos_vendidos(): array
    {
        return $this->query(
            "
            SELECT COUNT(id_produto) as 'produtos_vendidos' FROM itemvenda
            "
        );
    }

    public function valor_total(): array 
    {
         return $this->query(
            "
            SELECT SUM(preco_total) as 'valor_de_vendas' FROM itemvenda
            "
        );
    }

}