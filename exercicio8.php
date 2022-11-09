<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <p>8.Faça um script que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius. •C = (5 \* (F-32) / 9).
</p>

    <form class="form-control" action="exercicio8.php" method="get">


        <div class="mb-3"> 
            <label for=""> Digite a temperatura em °F: </label>
            <input class="form-control" type="text" name="farenheit" id=""/>
        </div>

         <input class="btn btn-primary w-100" type="submit" value="Calcular">
    </form>

    <?php 

    // entrada
        $farenheit = $_GET["farenheit"];
        
       
       
       
    // processamento

    $celsius = ( 5 * ($farenheit - 32) / 9);
    $celsius = number_format($celsius, 2, ',', '');

    // subtração, multiplicação e divisão

    // saída
        echo "<div class='alert alert-primary text-center'>Temperatura $celsius °C:";

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>
