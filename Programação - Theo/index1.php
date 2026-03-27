<?php
class Livro
{
    public $titulo;
    public $autor;
    public $Npag;
    public $anopublic;
}
$it = new Livro();
$it->titulo = "It-Uma obra prima do medo";
$it->autor = "Stephen King";
$it->Npag = "1200";
$it->anopublic = "1986";

$principe = new Livro();
$principe->titulo = "O pequeno príncipe";
$principe->autor = "Antoine de Saint-Exupéry";
$principe->Npag = "67";
$principe->anopublic = "1943";

echo "O livro é " . $it->titulo . ".<br>";
echo "O livro tem o autor como " . $it->autor . ".<br>";
echo "O livro tem " . $it->Npag . "págs.<br>";
echo "O livro foi publicado em " . $it->anopublic . ".<br><br>";

echo "O livro é " . $principe->titulo . ".<br>";
echo "O livro tem o autor como " . $principe->autor . ".<br>";
echo "O livro tem " . $principe->Npag . "págs.<br>";
echo "O livro foi publicado em " . $principe->anopublic . ".<br>";
?>
