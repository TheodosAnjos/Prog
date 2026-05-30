<?php
class Estoque
{
    private $produtos = [];
    public function adicionarProduto($nome, $quantidade)
    {
        $this->produtos[] = [
            'nome' => $nome,
            'qtd' => $quantidade
        ];
    }

    public function listarProdutos()
    {
        foreach ($this->produtos as $p) {
            echo $p['nome'] . ": " . $p['qtd'] . "<br>";
        }
    }
    public function totalItens()
    {
        $total = 0;
        foreach ($this->produtos as $p) {
            $total += $p['qtd'];
        }
        return $total;
    }
}

$estoque = new Estoque();
$estoque->adicionarProduto("Teclado", 10);
$estoque->adicionarProduto("Mouse", 15);
$estoque->adicionarProduto("Monitor", 5);

echo "<strong>Estoque:</strong><br>";
$estoque->listarProdutos();
echo "<br><strong>Total de itens:</strong> " . $estoque->totalItens();
