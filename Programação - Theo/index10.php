<?php
class produto
{
    public $nome;
    public $preco;
    public $quantidade;

    public function adicionarEstoque($quantidade)
    {
        $this->quantidade += $quantidade;
    }
    public function removerEstoque($quantidade)
    {
        if ($quantidade <= $this->quantidade) {
            $this->quantidade -= $quantidade;
        } else {
            echo "Quantidade insuficiente em estoque.";
        }
    }
}
$produto1 = new produto();
$produto1->nome = "Camiseta";
$produto1->preco = 29.99;
$produto1->quantidade = 10;
echo "O nome do produto é: " . $produto1->nome . "<br>";
echo "O preço do produto é: R$ " . $produto1->preco . "<br>";
echo "A quantidade em estoque é: " . $produto1->quantidade . "<br><br>";


$produto2 = new produto();
$produto2->nome = "Calça Jeans";
$produto2->preco = 79.99;
$produto2->quantidade = 5;
echo "O nome do produto é: " . $produto2->nome . "<br>";
echo "O preço do produto é: R$ " . $produto2->preco . "<br>";
echo "A quantidade em estoque é: " . $produto2->quantidade . "<br><br>";


$produto1->adicionarEstoque(5);
echo "A nova quantidade em estoque do produto: " . $produto1->nome . ", é: " . $produto1->quantidade . "<br><br>";
$produto2->removerEstoque(3);
echo "A nova quantidade em estoque do produto: " . $produto2->nome . ", é: " . $produto2->quantidade . "<br><br>";
?>