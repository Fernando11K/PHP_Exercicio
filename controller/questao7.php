<?php

include("../model/Funcionario.php");

$dados = $_POST;

var_dump($dados);

$Funcionario = new Funcionario($dados['valorHora'], $dados['horasTrabalho']);

echo "Salario: " . $Funcionario->getSalario();


?>