<?php

include "Pessoa.php";

class Funcionario extends Pessoa
{
    public $valorHora;

    public $horasTrabalho;


    function __construct($nome, $cpf, $endereco, $valorHora, $horasTrabalho)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->valorHora = $valorHora;
        $this->horasTrabalho = $horasTrabalho;

    }

    function getSalario()
    {
        return $this->horasTrabalho * $this->valorHora;
    }

}

?>