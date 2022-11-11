<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <p>12.Tendo como dado de entrada a altura (h) de uma pessoa, construa um script que calcule seu peso ideal,
        utilizando as seguintes fórmulas:
        •Para homens: (72.7\*h) - 58

        •Para mulheres: (62.1\*h) – 44.7
    </p>

    <form class="form-control" action="exercicio12.php" method="get">


        <div class="mb-3 ">
            <label for="" class="form-label ">Sexo:</label>
            <select class="form-select form-select-lg bg-secondary bg-opacity-25 " name="sexo" id="">

                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>

            </select>
        </div>
        <div class="mb-3">
            <label for=""> Digite a altura: </label>
            <input class="form-control" type="number" min="0" max="3" step=".01" name="altura" id="" />
        </div>

        <input class="btn btn-primary w-100" type="submit" value="Calcular">
    </form>

    <?php


    $dados = $_GET;
    $altura = $dados["altura"];
    $sexo = $dados["sexo"];
    print_r($dados);



    $pesoIdeal = $sexo == "masculino" ? $pesoIdealMasculino = (72.7 * $altura) - 58 : $pesoIdealFemino = (62.1 * $altura) - 44.7;


    echo "<div class='alert alert-primary text-center'>Peso ideal: " . $pesoIdeal;

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>