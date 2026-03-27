<?php
class funcionario
{
    public $nome;
    public $cargo;
    public $salario;
    public $dataadm;
}

$teteu = new funcionario();
$teteu->nome = "Theo dos Anjos Machado";
$teteu->cargo = "Analista";
$teteu->salario = "R$100.000";
$teteu->dataadm = "1938";

$mari = new funcionario();
$mari->nome = "Mariana Dutra Fonseca";
$mari->cargo = "CEO";
$mari->salario = "R$200.000";
$mari->dataadm = "1940";

echo "O Funcionário é " . $teteu->nome . ".<br>";
echo "Seu cargo é " . $teteu->cargo . ".<br>";
echo "Seu salario é " . $teteu->salario . ".<br>";
echo "Sua data de admissão é " . $teteu->dataadm . ".<br><br>";

echo "O Funcionário é " . $mari->nome . ".<br>";
echo "Seu cargo é " . $mari->cargo . ".<br>";
echo "Seu salario é " . $mari->salario . ".<br>";
echo "Sua data de admissão é " . $mari->dataadm . ".<br>";
?>
