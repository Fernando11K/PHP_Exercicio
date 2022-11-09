<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <p>6.Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário.</p>

    <form class="form-control" action="exercicio6.php" method="get">


        <div class="mb-3"> 
            <label for=""> Digite o tamanho do lado do quadrado: </label>
            <input class="form-control" type="text" name="lado" id=""/>
        </div>

         <input class="btn btn-primary w-100" type="submit" value="Calcular">
    </form>

    <?php 

    // entrada
        $lado = $_GET["lado"];
       
       

      

    // processamento

    $areaQuadrado = $lado ** 2;
    $dobroAreaQuadrado = $areaQuadrado * 2;

    // subtração, multiplicação e divisão

    // saída
        echo "<div class='alert alert-primary text-center'>Resultado do dobro da Área do Quadrado: ".$dobroAreaQuadrado;

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>
