<?php
class Pessoa
{
    private $idade;
    public function setIdade($idade)
    {
        if ($idade < 0) {
            echo 'Idade invalida!';
        }
        $this->idade = $idade; // Mesmo quando a idade é inválida (menor que 0), o programa exibe a mensagem de erro, mas continua executando a atribuição
    }
    public function getIdade()
    {
        return $this->idade;
    }
}
$p = new Pessoa();
$p->setIdade(-5);
echo $p->getIdade(); // imprime -5 !

?>

//VERSÃO CORRIGIDA / NÃO EXECUTAR
<?php
class Pessoa {
    private $idade;
    public function setIdade($idade) {
        if ($idade < 0) {
            echo 'Idade invalida!';
            return;
        }
        $this->idade = $idade;
    }
    public function getIdade() {
        return $this->idade;
    }
}
$p = new Pessoa();
$p->setIdade(-5);
echo $p->getIdade();

?>