<?php
class Retangulo
{
    public $comprimento;
    public $largura;
    public function calcularArea()
    {
        return $this->comprimento * $this->largura;
    }
    public function calcularPerimetro()
    {
        return 2 * ($this->comprimento + $this->largura);
    }
}
$retangulo1 = new Retangulo();
$retangulo1->comprimento = 5;
$retangulo1->largura = 3;
echo "O comprimento do retângulo é: " . $retangulo1->comprimento . ".<br>";
echo "A largura do retângulo é: " . $retangulo1->largura . ".<br>";
echo "A área do retângulo é: " . $retangulo1->calcularArea() . ".<br>";
echo "O perímetro do retângulo é: " . $retangulo1->calcularPerimetro() . ".<br><br>";

$retangulo2 = new Retangulo();
$retangulo2->comprimento = 10;
$retangulo2->largura = 4;
echo "O comprimento do retângulo é: " . $retangulo2->comprimento . ".<br>";
echo "A largura do retângulo é: " . $retangulo2->largura . ".<br>";
echo "A área do retângulo é: " . $retangulo2->calcularArea() . ".<br>";
echo "O perímetro do retângulo é: " . $retangulo2->calcularPerimetro() . ".<br>";
?>