<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <p>9.Faça um script que peça a temperatura em graus Celsius, transforme e mostre em graus Farenheit.</p>

    <form class="form-control" action="exercicio9.php" method="get">


        <div class="mb-3"> 
            <label for=""> Digite a temperatura em °C: </label>
            <input class="form-control" type="text" name="celsius" id=""/>
        </div>

         <input class="btn btn-primary w-100" type="submit" value="Calcular">
    </form>

    <?php 

    // entrada
        $celsius = $_GET["celsius"];
       
    // processamento

    $farenheit = ($celsius * 1.8) + 32;
    $farenheit = number_format($farenheit, 2, ',', '');

    // subtração, multiplicação e divisão

    // saída
        echo "<div class='alert alert-primary text-center'>Temperatura $farenheit °F:";

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>
