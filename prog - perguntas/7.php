<?php
class Carro {
    private $modelo;
    public function __construct($modelo) {
        $this->modelo = $modelo;
    }
    public function getModelo() {
        return $this->modelo;
    }
}
$c = Carro('Fusca'); // para criar um objeto é obrigatório usar a palavra-chave new. Sem ela, o PHP tenta executar Carro() como se fosse uma função, o que gera erro.
echo $c->getModelo();
?>

//VERSÃO CORRIGIDA / NÃO EXECUTAR
<?php
class Carro {
    private $modelo;
    public function __construct($modelo) {
        $this->modelo = $modelo;
    }
    public function getModelo() {
        return $this->modelo;
    }
}
$c = new Carro('Fusca');
echo $c->getModelo();
?>
