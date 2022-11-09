<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">

    <p>4.Faça um script que peça as 3 notas de um aluno e mostre a média.</p>

    <form class="form-control" action="exercicio4.php" method="get">


        <div class="mb-3"> 
            <label for=""> Digite a nota1: </label>
            <input class="form-control" type="text" name="nota1" id=""/>
        </div>

        <div class="mb-3">
            <label for=""> Digite a nota2: </label>
            <input class="form-control" type="text" name="nota2" id=""/>
        </div>

        <div class="mb-3">
            <label for=""> Digite a nota3: </label>
            <input class="form-control" type="text" name="nota3" id=""/>
        </div>

         <input class="btn btn-primary w-100" type="submit" value="Calcular">
    </form>

    <?php 

    // entrada
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];

      

    // processamento

    $media = ($nota1 + $nota2 + $nota3) / 4;


    // subtração, multiplicação e divisão

    // saída
        echo "<div class='alert alert-primary text-center'>Média: ".$media;

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>
