<?php
class Retangulo
{
    private $largura;
    private $altura;

    public function __construct($largura, $altura)
    {
        $this->setLargura($largura);
        $this->setAltura($altura);
    }
    public function getLargura()
    {
        return $this->largura;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setLargura($largura)
    {
        if ($largura <= 0) {
            echo "Largura inválida!<br>";
            return;
        }
        $this->largura = $largura;
    }
    public function setAltura($altura)
    {
        if ($altura <= 0) {
            echo "Altura inválida!<br>";
            return;
        }
        $this->altura = $altura;
    }
    public function calcularArea()
    {
        return $this->largura * $this->altura;
    }
    public function calcularPerimetro()
    {
        return 2 * ($this->largura + $this->altura);
    }
}

$r1 = new Retangulo(5, 4);
$r2 = new Retangulo(8, 3);

echo "Retângulo 1 - Área: " . $r1->calcularArea() .
    " | Perímetro: " . $r1->calcularPerimetro() . "<br>";

echo "Retângulo 2 - Área: " . $r2->calcularArea() .
    " | Perímetro: " . $r2->calcularPerimetro() . "<br>";
if ($r1->calcularArea() > $r2->calcularArea()) {
    echo "O Retângulo 1 possui a maior área.";
} elseif ($r2->calcularArea() > $r1->calcularArea()) {
    echo "O Retângulo 2 possui a maior área.";
} else {
    echo "Os dois retângulos possuem a mesma área.";
}
