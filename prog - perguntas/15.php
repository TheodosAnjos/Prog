<?php
class Contato
{
    private $nome;
    private $telefone;
    public function __construct($nome, $telefone)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
}
class Agenda
{
    private $contatos = [];
    public function adicionarContato($nome, $telefone)
    {
        $c = new Contato($nome, $telefone);
        $this->contatos[] = $c;
    }
    public function listar()
    {
        foreach ($this->contatos as $c) {
            echo "Nome: " . $c->getNome() .
                " | Telefone: " . $c->getTelefone() . "<br>";
        }
    }
}
$agenda = new Agenda();

$agenda->adicionarContato("Theo", "(55) 99999-1111");
$agenda->adicionarContato("Mariana", "(55) 98888-2222");
$agenda->adicionarContato("Lorenzo", "(55) 97777-3333");
echo "<strong>Lista de Contatos:</strong><br>";
$agenda->listar();
