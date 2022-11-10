<?php

include("../model/Aluno.php");

$dados = $_POST;

var_dump($dados);

$aluno = new Aluno($dados['nome'], '000.000.000-54', 'Rua Sem Saida', $dados['nota1'], $dados['nota2'], $dados['nota3']);

echo "Média: " . $aluno->media();
echo "<br>";
echo "Banco de Dados: " . $aluno->add();


print_r($aluno);
?>