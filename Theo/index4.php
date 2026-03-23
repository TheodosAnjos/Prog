<?php
class aluno
{
    public $nome;
    public $media;
    public $situacao;
    public $matricula;

    public function calculomedia()
    {
        if ($this->media >= 7) {
            $this->situacao = "Aprovado";
        } else {
            $this->situacao = "Reprovado";
        }
    }           
}
$lorenzo = new aluno();
$lorenzo->nome = "Lorenzo Coco";
$lorenzo->media = 4.5;
$lorenzo->situacao = "Reprovado";
$lorenzo->matricula = "20240001"; 

$Bruno = new aluno();
$Bruno->nome = "Bruno Silva";
$Bruno->media = 8.0;
$Bruno->situacao = "Aprovado";
$Bruno->matricula = "20240002";

echo "Aluno: " . $lorenzo->nome . ".<br>";
echo "A média do aluno é: " . $lorenzo->media . ".<br>";
echo "A situação do aluno é: " . $lorenzo->situacao . ".<br>";
echo "A matrícula do aluno é: " . $lorenzo->matricula . ".<br><br>";

echo "Aluno: " . $Bruno->nome . ".<br>";
echo "A média do aluno é: " . $Bruno->media . ".<br>";
echo "A situação do aluno é: " . $Bruno->situacao . ".<br>";
echo "A matrícula do aluno é: " . $Bruno->matricula . ".<br><br>";

echo "Calculando a média do aluno " . $lorenzo->nome . ":<br>";
$lorenzo->calculomedia();

echo "A situação do aluno " . $lorenzo->nome . " é: " . $lorenzo->situacao . ".<br><br>";
echo "Calculando a média do aluno " . $Bruno->nome . ":<br>";
$Bruno->calculomedia();
echo "A situação do aluno " . $Bruno->nome . " é: " . $Bruno->situacao . ".<br>";




?>