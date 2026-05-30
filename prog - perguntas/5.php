<?php
class Aluno {
    private $nome;
    private $nota;
    public function __construct($nome, $nota) {
        $this->nome = $nome;
        $this->nota = $nota;
    }
    public function exibir() {
        echo 'Aluno: ' . $nome . ' - Nota: ' . $nota; // variáveis $nome e $nota não existem dentro do método exibir()
    }
$a = new Aluno('Carlos', 8.5);
$a->exibir();
?>



//VERSÃO CORRIGIDA / NÃO EXECUTAR
<?php
class Aluno {
    private $nome;
    private $nota;

    public function __construct($nome, $nota) {
        $this->nome = $nome;
        $this->nota = $nota;
    }
    public function exibir() {
        echo 'Aluno: ' . $this->nome . ' - Nota: ' . $this->nota;
    }
}
$a = new Aluno('Carlos', 8.5);
$a->exibir();
?>