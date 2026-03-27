<?php

class Carro
{
    public $modelo;
    public $marca;
    public $ano;
    public $cor;
    public $velocidadeMaxima;
    public function acelerar()
    {
        echo "O carro está acelerando.";
    }

    public function frear()
    {
        echo "O carro está freando.";
    }
}
$gol = new Carro();
$gol->modelo = "Gol G5";
$gol->marca = "Volkswagen";
$gol->ano = "2010";
$gol->cor = "Prata";
$gol->velocidadeMaxima = "180km/h";

$palio = new Carro();
$palio->modelo = "Palio Fire";
$palio->marca = "Fiat";
$palio->ano = "2015";
$palio->cor = "Vermelho";
$palio->velocidadeMaxima = "160km/h";
echo "O modelo do carro é " . $gol->modelo . ".<br>";
echo "A marca do carro é " . $gol->marca . ".<br>";
echo "O ano do carro é " . $gol->ano . ".<br>";
echo "A cor do carro é " . $gol->cor . ".<br>";
echo "A velocidade máxima do carro é " . $gol->velocidadeMaxima . ".<br><br>";
echo $gol->acelerar() . "<br>";
echo $gol->frear() . "<br><br>";

echo "O modelo do carro é " . $palio->modelo . ".<br>";
echo "A marca do carro é " . $palio->marca . ".<br>";
echo "O ano do carro é " . $palio->ano . ".<br>";
echo "A cor do carro é " . $palio->cor . ".<br>";
echo "A velocidade máxima do carro é " . $palio->velocidadeMaxima . ".<br><br>";
echo $palio->acelerar() . "<br>";
echo $palio->frear() . "<br>";
?>
