<?php
class circulo
{
    public $raio;

    public function Area()
    {
        return pi() * pow($this->raio, 2);
    }
    public function perimetro()
    {
        return 2 * pi() * $this->raio;
    }
}
$circulo1 = new circulo();
$circulo1->raio = 5;
echo "A área do círculo é: " . $circulo1->Area() . "<br>";
echo "O perímetro do círculo é: " . $circulo1->perimetro() . "<br><br>";

$circulo2 = new circulo();
$circulo2->raio = 3;
echo "A área do círculo é: " . $circulo2->Area() . "<br>";
echo "O perímetro do círculo é: " . $circulo2->perimetro() . "<br><br>";
