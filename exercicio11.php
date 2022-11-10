<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <p>11.Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal, usando a seguinte fórmula:
    (72.7\*altura) – 58
</p>

    <form class="form-control" action="exercicio11.php" method="get">


        <div class="mb-3"> 
            <label for=""> Digite a altura: </label>
            <input class="form-control" type="number" min="0" max="3" step=".01" name="altura" id=""/>
        </div>

         <input class="btn btn-primary w-100" type="submit" value="Calcular">
    </form>

    <?php 

    // entrada
        $altura = $_GET["altura"];
       

    // processamento

    $pesoIdeal = (72.7 * $altura)-58;
    

    // subtração, multiplicação e divisão

    // saída
        echo "<div class='alert alert-primary text-center'>Peso ideal: ".$pesoIdeal;

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>
