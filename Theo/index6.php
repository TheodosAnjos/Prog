<?php
class Conta{
    public $numconta;
    public $titular;
    public $saldo;
    public $juros;
    public function depositar($valor){
        $this->saldo += $valor;
    }
    public function sacar($valor){
        if($valor <= $this->saldo){
            $this->saldo -= $valor;
        }else{
            echo "Saldo insuficiente para saque.";
        }
    }
    public function exibicaodesaldo(){
        echo "O saldo da conta é: R$" . $this->saldo . ".<br>";
    }
}
$conta1 = new Conta();
$conta1->numconta = "12345-6";
$conta1->titular = "Theo dos Anjos Machado";
$conta1->saldo = 1000;
$conta1->juros = 0.05;
echo "Número da conta: " . $conta1->numconta . ".<br>";
echo "Titular da conta: " . $conta1->titular . ".<br>";
echo "Saldo inicial: R$" . $conta1->saldo . ".<br><br>";
echo "Depositando R$500 na conta...<br>";
$conta1->depositar(500);
$conta1->exibicaodesaldo();
echo "Sacando R$200 da conta...<br>";
$conta1->sacar(200);
$conta1->exibicaodesaldo();
echo "<br><br>";


$conta2 = new Conta();
$conta2->numconta = "65432-1";
$conta2->titular = "Mariana Dutra Fonseca";
$conta2->saldo = 2000;  
$conta2->juros = 0.03;
echo "Número da conta: " . $conta2->numconta . ".<br>";
echo "Titular da conta: " . $conta2->titular . ".<br>";
echo "Saldo inicial: R$" . $conta2->saldo . ".<br><br>";
echo "Depositando R$1000 na conta...<br>";
$conta2->depositar(1000);
$conta2->exibicaodesaldo();
echo "Sacando R$500 da conta...<br>";
$conta2->sacar(500);
$conta2->exibicaodesaldo();
?>