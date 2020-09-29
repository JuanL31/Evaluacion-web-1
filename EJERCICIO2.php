<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BODYTECH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BODYTECH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header> 
<center>
            <form class="mt-5" action="EJERCICIO2.php" method="POST">
                <h4> BODYTECH</h4>
                <br>
                <br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Introduzca su Peso" name="Peso">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Introduzca su Altura" name="Altura">
                        </div>
                       <br>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5" name="botonCalcular1">Calcular</button>
                   </form>
            </center>
</body>
</html>

<?php
    if(isset($_POST["botonCalcular1"])){
    $peso=$_POST["Peso"];
    $altura=$_POST["Altura"];
    $imc;

    $imc=$peso/($altura*$altura);
    if($imc<18.5){
        echo ("Su IMC es Peso Insuficiente:".$imc);
    }
    elseif ($imc>=18.5 and $imc<=24.9)
    {
        echo ("Su IMC es Peso Normal:".$imc);
    }
    elseif ($imc>=25 and $imc<=26.9)
    {
        echo ("Su IMC es Sobrepeso Grado 1".$imc);
    }
    elseif ($imc>=27 and $imc<=29.9)
    {
        echo ("Su IMC es Sobrepeso Grado II".$imc);
    }
    elseif ($imc>=30 and $imc<=34.9)
    {
        echo ("Su IMC es Obesidad tipo I".$imc);
    }
    elseif ($imc>=35 and $imc<=39.9)
    {
        echo ("Su IMC es Obesidad tipo II".$imc);
    }
    elseif ($imc>=40 and $imc<=49.9)
    {
        echo ("Su IMC es Obesidad tipo III".$imc);
    }
    elseif ($imc>=50)
    {
        echo ("Su IMC es Obesidad tipo Iv".$imc);
    }
    
    }
?>