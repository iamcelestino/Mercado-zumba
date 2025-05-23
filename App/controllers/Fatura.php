<?php

namespace App\controllers;
use App\Core\Controller;
use App\Model\{Fatura as modelo_fatura};

class Fatura extends Controller
{
    public mixed $fatura;

    public function __construct()
    {
        $this->fatura = new modelo_fatura();
    }

    public function index(): void
    {
        $faturas = $this->load_model('fatura');
        $dados_fatura = $faturas->findAll();

        $this->view('faturas', [
            'faturas' => $dados_fatura
        ]);
    }

    public function criar(int $id): void
    {
        $id_item_venda = $id;
        $itemvenda = $this->load_model('itemvenda');
        $dados_vendas = $itemvenda->where('id_item_venda', $id_item_venda);

        $dados_vendas_fatura = [
            'id_item_venda' => $id_item_venda ?? null,
            'valor_total' => $dados_vendas['0']->preco_total ?? null
        ];

        $this->fatura->insert($dados_vendas_fatura);
        $this->redirect('admin/vendas');
    
    }

    public function gerar_fatura(int $id_item_venda): void
{
    $itemvenda = $this->load_model('itemvenda');
    $dados_vendas = $itemvenda->produto_vendido($id_item_venda);

    if (empty($dados_vendas)) {
        die('Nenhuma venda encontrada.');
    }

    $html = '
    <style>
        body { font-family: sans-serif; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .font-bold { font-weight: bold; }
        .border { border: 1px solid #e5e7eb; }
        .rounded { border-radius: 0.5rem; }
        .p-2 { padding: 0.5rem; }
        .p-4 { padding: 1rem; }
        .mb-4 { margin-bottom: 1rem; }
        .w-full { width: 100%; }
        .bg-gray { background-color: #f3f4f6; }
        table { border-collapse: collapse; width: 100%; }
        th, td { padding: 8px; border: 1px solid #e5e7eb; }
        th { background-color: #f9fafb; }
        img { max-height: 80px; }
    </style>

    <div class="p-4 border rounded">
        <h1 class="text-center font-bold mb-4">Fatura de Venda</h1>

        <p class="mb-4"><strong>Data:</strong> ' . date("d/m/Y") . '</p>
        
        <table class="w-full">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Produto</th>
                    <th>Categoria</th>
                    <th>Qtd</th>
                    <th>Preço Unitário</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>';

    $totalGeral = 0;

    foreach ($dados_vendas as $item) {
        $totalGeral += $item->preco_total;

        $html .= '
            <tr>
                <td><img src="' . $item->imagem . '" alt="' . htmlspecialchars($item->nome) . '"></td>
                <td>' . htmlspecialchars($item->nome) . '</td>
                <td>' . htmlspecialchars($item->categoria) . '</td>
                <td>' . (int)$item->quantidade . '</td>
                <td>' . number_format($item->preco_unitario, 2, ',', '.') . ' KZ</td>
                <td>' . number_format($item->preco_total, 2, ',', '.') . ' KZ</td>
            </tr>';
    }

    $html .= '
            <tr>
                <td colspan="5" class="text-right font-bold">Total Geral</td>
                <td class="font-bold">' . number_format($totalGeral, 2, ',', '.') . ' KZ</td>
            </tr>
            </tbody>
        </table>
    </div>';

    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
    $mpdf->Output('fatura.pdf', 'D'); // 'I' = show in browser
}

}
