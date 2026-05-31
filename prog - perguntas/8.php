<?php
class livro{
    private $titulo;
    private $autor;
    private $paginas;
     public function __construct($titulo, $autor, $paginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getPaginas() {
        return $this->paginas;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setPaginas($paginas) {
        $this->paginas = $paginas;
    }

    public function exibir() {
        echo "Título: " . $this->getTitulo() .
             " | Autor: " . $this->getAutor() .
             " | Páginas: " . $this->getPaginas() . "<br>";
    }
}
$livro = new livro('O Senhor dos Anéis', 'J.R.R. Tolkien', 1178);
$livro->exibir();
$livro2 = new livro('1984', 'George Orwell', 328);
$livro2->exibir();
?>
