<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <p>10.Faça um script que peça 2 números inteiros e um número real.
        Calcule e mostre:
        •o produto do dobro do primeiro com metade do segundo .
        •a soma do triplo do primeiro com o terceiro.
        •o terceiro elevado ao cubo.</p>

    <form class="form-control" action="exercicio10.php" method="get">


        <div class="mb-3">
            <label for=""> Digite um número inteiro</label>
            <input class="form-control" type="text" name="inteiro1" id="" />
        </div>

        <div class="mb-3">
            <label for=""> Digite um número inteiro </label>
            <input class="form-control" type="text" name="inteiro2" id="" />
        </div>

        <div class="mb-3">
            <label for=""> Digite um número real </label>
            <input class="form-control" type="text" name="real" id="" />
        </div>

        <input class="btn btn-primary w-100" type="submit" value="Calcular">
    </form>

    <?php

    // entrada
    $inteiro1 = $_GET["inteiro1"];
    $inteiro2 = $_GET["inteiro2"];
    $real = $_GET["real"];




    // processamento
    
    $produto = $inteiro1 * ($inteiro2 * 0.5);
    $soma = ($inteiro1 * 3) + $real;
    $cubo = $real ** 3;
    // subtração, multiplicação e divisão
    
    // saída
    echo "<div class='alert alert-primary text-center'>O produto do dobro do primeiro com metade do segundo: " . $produto;
    echo "<div class='alert alert-primary text-center'>A soma do triplo do primeiro com o terceiro: " . $soma;
    echo "<div class='alert alert-primary text-center'>O terceiro elevado ao cubo: " . $cubo;

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>