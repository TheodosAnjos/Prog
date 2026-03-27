<?php
class pessoa
{
    public $nome;
    public $idade;
    public $genero;
    public function calculoAnos($anoNascimento)
    {
        $anoAtual = date("Y");
        return $anoAtual - $anoNascimento;
    }
    public function calculomeses($anoNascimento)
    {
        $anoAtual = date("Y");
        return ($anoAtual - $anoNascimento) * 12;
    }
    public function calculodias($anoNascimento)
    {
        $anoAtual = date("Y");
        return ($anoAtual - $anoNascimento) * 365;
    }
}
$pessoa1 = new pessoa();
$pessoa1->nome = "Mariana Dutra";
$pessoa1->idade = 18;
$pessoa1->genero = "Feminino";

echo "O nome da pessoa é: " . $pessoa1->nome . "<br>";
echo "A idade da pessoa é: " . $pessoa1->idade . "<br>";
echo "O gênero da pessoa é: " . $pessoa1->genero . "<br>";
echo "A pessoa tem " . $pessoa1->calculoAnos(2008) . " anos.<br>";
echo "A pessoa tem " . $pessoa1->calculomeses(2008) . " meses.<br>";
echo "A pessoa tem " . $pessoa1->calculodias(2008) . " dias.<br><br>";


$pessoa2 = new pessoa();
$pessoa2->nome = "Bruno Beck";
$pessoa2->idade = 17;
$pessoa2->genero = "Masculino";
echo "O nome da pessoa é: " . $pessoa2->nome . "<br>";
echo "A idade da pessoa é: " . $pessoa2->idade . "<br>";
echo "O gênero da pessoa é: " . $pessoa2->genero . "<br>";
echo "A pessoa tem " . $pessoa2->calculoAnos(2009) . " anos.<br>";
echo "A pessoa tem " . $pessoa2->calculomeses(2009) . " meses.<br>";
echo "A pessoa tem " . $pessoa2->calculodias(2009) . " dias.<br><br>";
?>