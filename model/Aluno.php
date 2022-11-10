<?php
include "Pessoa.php";
class Aluno extends Pessoa
{
    // public $nome;
    public $nota1;
    public $nota2;
    public $nota3;

    function __construct($nome, $cpf, $endereco, $n1, $n2, $n3)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
    }

    function media()
    {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    function add()
    {
        return "Salvo!";
    }
}


?>