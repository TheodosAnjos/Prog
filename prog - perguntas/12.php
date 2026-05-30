<?php
class Funcionario
{
    private $nome;
    private $cargo;
    private $salario;
    public function __construct($nome, $cargo, $salario)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCargo()
    {
        return $this->cargo;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function aumentarSalario($percentual)
    {
        $this->salario = $this->salario * (1 + $percentual / 100);
    }
    public function exibir()
    {
        echo "Nome: " . $this->nome .
            "<br>Cargo: " . $this->cargo .
            "<br>Salário: R$ " . number_format($this->salario, 2, ',', '.') .
            "<br><br>";
    }
}
$funcionario = new Funcionario("João Silva", "Analista", 3000);
echo "<strong>Antes do aumento:</strong><br>"; //fiz em negrito pra ficar bonitin fessor
$funcionario->exibir();
$funcionario->aumentarSalario(15);
echo "<strong>Depois do aumento:</strong><br>";
$funcionario->exibir();
