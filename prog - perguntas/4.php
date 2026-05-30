<?php
class Produto
{

    private $nome;
    private $preco;

    public function __construct($nome, $preco)
    {

        $this->nome = $nome;

        $this->preco = $preco;
    }
}

$p = new Produto('Teclado', 150.00);

echo $p->nome; // linha de código que gera um erro, pois a propriedade $nome é privada e não pode ser acessada diretamente fora da classe Produto.

?>

//VERSÃO CORRIGIDA / NÃO EXECUTAR
<?php

class Produto {

    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
    public function getNome() {
        return $this->nome;
    }
}

$p = new Produto('Teclado', 150.00);
echo $p->getNome();

?>