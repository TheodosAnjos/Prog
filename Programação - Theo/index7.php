<?php
class triangulo
{
    public $base;
    public $altura;

    public function Area()
    {
        return ($this->base * $this->altura) / 2;
    }
    public function Tipo()
    {
        if ($this->base == $this->altura) {
            return "Triángulo equilátero";
        } elseif ($this->base == $this->altura) {
            return "Triángulo isósceles";
        } else {
            return "Triángulo escaleno";
        }
    }
}

$triangulo1 = new triangulo();
$triangulo1->base = 5;
$triangulo1->altura = 5;
echo "A área do triângulo é: " . $triangulo1->Area() . "<br>";
echo "O tipo do triângulo é: " . $triangulo1->Tipo() . "<br>";
echo "A altura do triângulo é: " . $triangulo1->altura . "<br>";
echo "A base do triângulo é: " . $triangulo1->base . "<br><br>";

$triangulo2 = new triangulo();
$triangulo2->base = 5;
$triangulo2->altura = 3;
echo "A área do triângulo é: " . $triangulo2->Area() . "<br>";
echo "O tipo do triângulo é: " . $triangulo2->Tipo() . "<br>";
echo "A altura do triângulo é: " . $triangulo2->altura . "<br>";
echo "A base do triângulo é: " . $triangulo2->base . "<br><br>";
?>
